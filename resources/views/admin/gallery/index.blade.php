@extends('admin.layouts.main')

@section('content-title', 'Kelola Galeri')

@section('card-title')
    <a href="{{ route('admin.galleries.create') }}" class="btn btn-sm btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Tambah Galeri
    </a>
@endsection

@section('card-content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th style="width: 100px">Cover</th>
                    <th>Judul</th>
                    <th>Tanggal Event</th>
                    <th>Jumlah Foto</th>
                    <th>Status</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galleries as $gallery)
                    <tr>
                        <td>
                            @if ($gallery->images->first())
                                <img src="{{ $gallery->images->first()->image_url }}"
                                    alt="{{ $gallery->title }}"
                                    class="rounded"
                                    style="width: 70px; height: 70px; object-fit: cover;">
                            @else
                                <div class="bg-secondary bg-opacity-10 rounded d-flex align-items-center justify-content-center"
                                    style="width: 70px; height: 70px;">
                                    <i class="bi bi-image text-secondary fs-4"></i>
                                </div>
                            @endif
                        </td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->event_date ? \Carbon\Carbon::parse($gallery->event_date)->format('d M Y') : '-' }}</td>
                        <td>{{ $gallery->images->count() }} foto</td>
                        <td>
                            <span class="badge bg-{{ $gallery->status === 'published' ? 'success' : 'secondary' }}">
                                {{ ucfirst($gallery->status) }}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.galleries.show', $gallery->id_gallery) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('admin.galleries.edit', $gallery->id_gallery) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.galleries.destroy', $gallery->id_gallery) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Hapus galeri ini beserta semua fotonya?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada galeri.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('card-footer')
    {{ $galleries->links() }}
@endsection