<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InformationController extends Controller
{
    public function index(): View
    {
        $informations = Information::with('post')->get();

        return view('informations.index', compact('informations'));
    }

    public function create(): View
    {
        return view('informations.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'description' => ['nullable', 'string'],
            'file' => ['nullable', 'string'],
            'bidang' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
        ]);

        Information::create($validated);

        return redirect()->route('informations.index')->with('success', 'Information created successfully.');
    }

    public function show(Information $information): View
    {
        return view('informations.show', compact('information'));
    }

    public function edit(Information $information): View
    {
        return view('informations.edit', compact('information'));
    }

    public function update(Request $request, Information $information): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'description' => ['nullable', 'string'],
            'file' => ['nullable', 'string'],
            'bidang' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
        ]);

        $information->update($validated);

        return redirect()->route('informations.index')->with('success', 'Information updated successfully.');
    }

    public function destroy(Information $information): RedirectResponse
    {
        $information->delete();

        return redirect()->route('informations.index')->with('success', 'Information deleted successfully.');
    }
}
