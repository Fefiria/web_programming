<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Models\User;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class MembershipApplicationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request, CloudinaryService $cloudinary): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string', 'max:30', 'unique:membership_applications,npm'],
            'birth_date' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255', 'unique:membership_applications,email'],
            'bio' => ['required',  'file', 'mimes:pdf', 'max:2048'],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $bioUpload = $cloudinary->upload($request->file('bio'));
        $cvUpload = $cloudinary->upload($request->file('cv'));

        MembershipApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'npm' => $validated['npm'],
            'birth_date' => $validated['birth_date'],
            'bio_url' => $bioUpload['secure_url'],
            'bio_public_id' => $bioUpload['public_id'],
            'cv_url' => $cvUpload['secure_url'],
            'cv_public_id' => $cvUpload['public_id'],
            'password' => Hash::make($validated['password']),
            'status' => 'pending',
        ]);

        return redirect()->route('membership.pending')->with(
            'success',
            'Pendaftaran berhasil dikirim. Silakan tunggu persetujuan admin.'
        );
    }
    /**
     * [ADMIN] Tampilkan daftar pendaftar (default: yang masih pending).
     */
    public function index(Request $request)
    {
        $status = $request->query('status', 'pending');

        $applications = MembershipApplication::when($status !== 'all', function ($query) use ($status) {
            $query->where('status', $status);
        })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.membership.index', compact('applications', 'status'));
    }

    /**
     * [ADMIN] Setujui pendaftar -> buat akun User resmi.
     * Password yang sudah di-hash saat registrasi dipakai ulang,
     * jadi pendaftar bisa login dengan email + password yang sama saat daftar.
     */
    public function approve(MembershipApplication $membershipApplication): RedirectResponse
    {
        if ($membershipApplication->status !== 'pending') {
            return back()->with('error', 'Pendaftaran ini sudah diproses sebelumnya.');
        }

        DB::transaction(function () use ($membershipApplication) {
            User::create([
                'name' => $membershipApplication->name,
                'username' => $membershipApplication->npm,
                'email' => $membershipApplication->email,
                'password' => $membershipApplication->password, // sudah hashed, langsung dipakai
                'phone_number' => $membershipApplication->phone_number,
                'npm' => $membershipApplication->npm,
                'birth_date' => $membershipApplication->birth_date,
                'bio' => $membershipApplication->bio_url,
                'cv_path' => $membershipApplication->cv_url,
                'role' => 'user',
                'email_verified_at' => now(),
            ]);

            $membershipApplication->update(['status' => 'approved']);
        });

        return back()->with('success', 'Pendaftar disetujui dan akun user berhasil dibuat.');
    }

    /**
     * [ADMIN] Tolak pendaftar.
     */
    public function reject(MembershipApplication $membershipApplication): RedirectResponse
    {
        if ($membershipApplication->status !== 'pending') {
            return back()->with('error', 'Pendaftaran ini sudah diproses sebelumnya.');
        }

        $membershipApplication->update(['status' => 'rejected']);

        return back()->with('success', 'Pendaftar ditolak.');
    }
}
