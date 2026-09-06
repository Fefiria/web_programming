@extends('admin.layouts.main')

@section('content-title', 'Tambah Galeri')

@section('card-title', 'Form Galeri Baru')

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

    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Judul Galeri</label>
            <input type="text" name="title" id="title" class="form-control"
                value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="event_date" class="form-label">Tanggal Event</label>
                <input type="date" name="event_date" id="event_date" class="form-control"
                    value="{{ old('event_date') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Upload Foto (bisa pilih beberapa sekaligus)</label>
            <input type="file" name="images[]" id="images" class="form-control"
                accept="image/png, image/jpeg, image/webp" multiple required>
            <div class="form-text">Format: JPG, JPEG, PNG, WEBP. Maksimal 4MB per foto.</div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i> Simpan Galeri
            </button>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
@endsection