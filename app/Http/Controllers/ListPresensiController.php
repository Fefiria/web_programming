<?php

namespace App\Http\Controllers;

use App\Models\ListPresensi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListPresensiController extends Controller
{
    public function index(): View
    {
        $listPresensis = ListPresensi::with(['post', 'presensi', 'statusPresensi'])->get();

        return view('list-presensis.index', compact('listPresensis'));
    }

    public function create(): View
    {
        return view('list-presensis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'id_presensi' => ['required', 'uuid'],
            'id_status_presensi' => ['required', 'uuid'],
        ]);

        ListPresensi::create($validated);

        return redirect()->route('list-presensis.index')->with('success', 'List presensi created successfully.');
    }

    public function show(ListPresensi $listPresensi): View
    {
        return view('list-presensis.show', compact('listPresensi'));
    }

    public function edit(ListPresensi $listPresensi): View
    {
        return view('list-presensis.edit', compact('listPresensi'));
    }

    public function update(Request $request, ListPresensi $listPresensi): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'id_presensi' => ['required', 'uuid'],
            'id_status_presensi' => ['required', 'uuid'],
        ]);

        $listPresensi->update($validated);

        return redirect()->route('list-presensis.index')->with('success', 'List presensi updated successfully.');
    }

    public function destroy(ListPresensi $listPresensi): RedirectResponse
    {
        $listPresensi->delete();

        return redirect()->route('list-presensis.index')->with('success', 'List presensi deleted successfully.');
    }
}
