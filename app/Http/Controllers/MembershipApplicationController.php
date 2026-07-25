<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
            'bio' => ['required', 'string', 'max:1000'],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $upload = $cloudinary->upload($request->file('cv'));

        MembershipApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'npm' => $validated['npm'],
            'birth_date' => $validated['birth_date'],
            'bio' => $validated['bio'],
            'cv_url' => $upload['secure_url'],
            'cv_public_id' => $upload['public_id'],
            'password' => Hash::make($validated['password']),
            'status' => 'pending',
        ]);

        return redirect()->route('membership.pending')->with(
            'success',
            'Pendaftaran berhasil dikirim. Silakan tunggu persetujuan admin.'
        );
    }
}
