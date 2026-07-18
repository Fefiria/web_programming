<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PresensiController extends Controller
{
    public function index(): View
    {
        $presensis = Presensi::with('post')->get();

        return view('presensis.index', compact('presensis'));
    }

    public function create(): View
    {
        return view('presensis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'role' => ['nullable', 'string'],
            'open_at' => ['nullable', 'date'],
            'close_at' => ['nullable', 'date'],
            'status' => ['nullable', 'string'],
        ]);

        Presensi::create($validated);

        return redirect()->route('presensis.index')->with('success', 'Presensi created successfully.');
    }

    public function show(Presensi $presensi): View
    {
        return view('presensis.show', compact('presensi'));
    }

    public function edit(Presensi $presensi): View
    {
        return view('presensis.edit', compact('presensi'));
    }

    public function update(Request $request, Presensi $presensi): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'role' => ['nullable', 'string'],
            'open_at' => ['nullable', 'date'],
            'close_at' => ['nullable', 'date'],
            'status' => ['nullable', 'string'],
        ]);

        $presensi->update($validated);

        return redirect()->route('presensis.index')->with('success', 'Presensi updated successfully.');
    }

    public function destroy(Presensi $presensi): RedirectResponse
    {
        $presensi->delete();

        return redirect()->route('presensis.index')->with('success', 'Presensi deleted successfully.');
    }
}
