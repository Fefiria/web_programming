<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::with(['post', 'division'])->get();

        return view('projects.index', compact('projects'));
    }

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'id_division' => ['required', 'uuid'],
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'url_project' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project): View
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project): View
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $validated = $request->validate([
            'id_post' => ['required', 'uuid'],
            'id_division' => ['required', 'uuid'],
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'url_project' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
