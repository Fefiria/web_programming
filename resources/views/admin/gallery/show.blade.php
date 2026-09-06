@extends('admin.layouts.main')

@section('content-title', $gallery->title)

@section('card-title')
    <span class="badge bg-{{ $gallery->status === 'published' ? 'success' : 'secondary' }}">
        {{ ucfirst($gallery->status) }}
    </span>
    <a href="{{ route('admin.galleries.edit', $gallery->id_gallery) }}" class="btn btn-sm btn-outline-primary ms-2">
        <i class="bi bi-pencil me-1"></i> Edit
    </a>
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
@endsection

@section('card-content')
    <dl class="row mb-4">
        <dt class="col-sm-2">Tanggal Event</dt>
        <dd class="col-sm-10">
            {{ $gallery->event_date ? \Carbon\Carbon::parse($gallery->event_date)->format('d F Y') : '-' }}
        </dd>

        <dt class="col-sm-2">Deskripsi</dt>
        <dd class="col-sm-10">{{ $gallery->description ?: '-' }}</dd>
    </dl>

    <h6 class="mb-3">Foto ({{ $gallery->images->count() }})</h6>
    <div class="row g-3">
        @forelse ($gallery->images as $image)
            <div class="col-6 col-md-3">
                <img src="{{ $image->image_url }}"
                    alt="{{ $gallery->title }}"
                    class="rounded w-100"
                    style="height: 180px; object-fit: cover;">
            </div>
        @empty
            <p class="text-muted">Belum ada foto di galeri ini.</p>
        @endforelse
    </div>
@endsection