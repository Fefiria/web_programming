<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function guestIndex()
    {
        $galleries = Gallery::with('images')->where('status', 'published')->latest()->get();
        return view('guest.gallery', compact('galleries'));
    }

    public function guestShow(Gallery $gallery)
    {
        $gallery->load('images');
        return view('guest.gallery-detail', compact('gallery'));
    }

    public function index()
    {
        $galleries = Gallery::with('images')->latest()->paginate(10);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request, CloudinaryService $cloudinary)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $gallery = Gallery::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'event_date' => $validated['event_date'] ?? null,
            'status' => $validated['status'],
        ]);

        foreach ($request->file('images') as $image) {
            $upload = $cloudinary->upload($image);
            GalleryImage::create([
                'id_gallery' => $gallery->id_gallery,
                'image_url' => $upload['secure_url'],
                'image_public_id' => $upload['public_id'],
            ]);
        }

        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function show(Gallery $gallery)
    {
        $gallery->load('images');
        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        $gallery->load('images');
        return view('admin.gallery.update', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $gallery->update($validated);
        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery, CloudinaryService $cloudinary)
    {
        foreach ($gallery->images as $image) {
            $cloudinary->destroy($image->image_public_id);
        }
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
