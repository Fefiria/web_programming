@extends('admin.layouts.main')

@section('content-title', 'Edit Galeri')

@section('card-title', 'Ubah Detail Galeri')

@section('card-content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.galleries.update', $gallery->id_gallery) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Galeri</label>
            <input type="text" name="title" id="title" class="form-control"
                value="{{ old('title', $gallery->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $gallery->description) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="event_date" class="form-label">Tanggal Event</label>
                <input type="date" name="event_date" id="event_date" class="form-control"
                    value="{{ old('event_date', $gallery->event_date ? \Carbon\Carbon::parse($gallery->event_date)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="draft" {{ old('status', $gallery->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $gallery->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label>
            <div class="row g-2">
                @forelse ($gallery->images as $image)
                    <div class="col-6 col-md-2">
                        <img src="{{ $image->image_url }}" class="rounded w-100" style="height: 100px; object-fit: cover;">
                    </div>
                @empty
                    <p class="text-muted mb-0">Tidak ada foto.</p>
                @endforelse
            </div>
            <div class="form-text">Penambahan/penghapusan foto individual belum didukung di form ini.</div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i> Simpan Perubahan
            </button>
            <a href="{{ route('admin.galleries.show', $gallery->id_gallery) }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
@endsection