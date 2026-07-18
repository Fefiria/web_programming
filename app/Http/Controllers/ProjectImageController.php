<?php

namespace App\Http\Controllers;

use App\Models\ProjectImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectImageController extends Controller
{
    public function index(): View
    {
        $projectImages = ProjectImage::with('project')->get();

        return view('project-images.index', compact('projectImages'));
    }

    public function create(): View
    {
        return view('project-images.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_project' => ['required', 'uuid'],
            'slot' => ['nullable', 'integer'],
            'image_url' => ['required', 'string'],
        ]);

        ProjectImage::create($validated);

        return redirect()->route('project-images.index')->with('success', 'Project image created successfully.');
    }

    public function show(ProjectImage $projectImage): View
    {
        return view('project-images.show', compact('projectImage'));
    }

    public function edit(ProjectImage $projectImage): View
    {
        return view('project-images.edit', compact('projectImage'));
    }

    public function update(Request $request, ProjectImage $projectImage): RedirectResponse
    {
        $validated = $request->validate([
            'id_project' => ['required', 'uuid'],
            'slot' => ['nullable', 'integer'],
            'image_url' => ['required', 'string'],
        ]);

        $projectImage->update($validated);

        return redirect()->route('project-images.index')->with('success', 'Project image updated successfully.');
    }

    public function destroy(ProjectImage $projectImage): RedirectResponse
    {
        $projectImage->delete();

        return redirect()->route('project-images.index')->with('success', 'Project image deleted successfully.');
    }
}
