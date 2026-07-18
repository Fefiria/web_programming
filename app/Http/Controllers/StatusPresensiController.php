<?php

namespace App\Http\Controllers;

use App\Models\StatusPresensi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatusPresensiController extends Controller
{
    public function index(): View
    {
        $statusPresensis = StatusPresensi::all();

        return view('status-presensis.index', compact('statusPresensis'));
    }

    public function create(): View
    {
        return view('status-presensis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        StatusPresensi::create($validated);

        return redirect()->route('status-presensis.index')->with('success', 'Status presensi created successfully.');
    }

    public function show(StatusPresensi $statusPresensi): View
    {
        return view('status-presensis.show', compact('statusPresensi'));
    }

    public function edit(StatusPresensi $statusPresensi): View
    {
        return view('status-presensis.edit', compact('statusPresensi'));
    }

    public function update(Request $request, StatusPresensi $statusPresensi): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $statusPresensi->update($validated);

        return redirect()->route('status-presensis.index')->with('success', 'Status presensi updated successfully.');
    }

    public function destroy(StatusPresensi $statusPresensi): RedirectResponse
    {
        $statusPresensi->delete();

        return redirect()->route('status-presensis.index')->with('success', 'Status presensi deleted successfully.');
    }
}
