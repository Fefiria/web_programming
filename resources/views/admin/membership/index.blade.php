@extends('admin.layouts.main')

@section('content-title', 'Pendaftar Anggota Baru')

@section('card-title')
    <div class="btn-group">
        <a href="{{ route('admin.membership-applications.index', ['status' => 'pending']) }}"
        class="btn btn-sm {{ $status === 'pending' ? 'btn-primary' : 'btn-outline-primary' }}">Pending</a>
        <a href="{{ route('admin.membership-applications.index', ['status' => 'approved']) }}"
        class="btn btn-sm {{ $status === 'approved' ? 'btn-primary' : 'btn-outline-primary' }}">Disetujui</a>
        <a href="{{ route('admin.membership-applications.index', ['status' => 'rejected']) }}"
        class="btn btn-sm {{ $status === 'rejected' ? 'btn-primary' : 'btn-outline-primary' }}">Ditolak</a>
        <a href="{{ route('admin.membership-applications.index', ['status' => 'all']) }}"
        class="btn btn-sm {{ $status === 'all' ? 'btn-primary' : 'btn-outline-primary' }}">Semua</a>
    </div>
@endsection

@section('card-content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
php artisan tinker
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Dokumen</th>
                    <th>Status</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($applications as $application)
                    <tr>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->npm }}</td>
                        <td>{{ $application->email }}</td>
                        <td>{{ $application->phone_number }}</td>
                        <td>
                            <a href="{{ $application->bio_url }}" target="_blank" class="btn btn-xs btn-outline-secondary">Bio</a>
                            <a href="{{ $application->cv_url }}" target="_blank" class="btn btn-xs btn-outline-secondary">CV</a>
                        </td>
                        <td>
                            @php
                                $badge = match($application->status) {
                                    'approved' => 'success',
                                    'rejected' => 'danger',
                                    default => 'warning',
                                };
                            @endphp
                            <span class="badge bg-{{ $badge }}">{{ ucfirst($application->status) }}</span>
                        </td>
                        <td class="text-end">
                            @if ($application->status === 'pending')
                                <form action="{{ route('admin.membership-applications.approve', $application->id_application) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-success" onclick="return confirm('Setujui pendaftar ini?')">Terima</button>
                                </form>
                                <form action="{{ route('admin.membership-applications.reject', $application->id_application) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tolak pendaftar ini?')">Tolak</button>
                                </form>
                            @else
                                <span class="text-muted">Sudah diproses</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Tidak ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('card-footer')
    {{ $applications->links() }}
@endsection
