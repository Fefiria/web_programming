@extends('guest.layouts.main')

@section('card-title', 'Divisi UKM Programming')
@section('card-content')
    <p class="text-slate-600 mt-2">Setiap divisi memiliki fokus dan peluang belajar yang berbeda sesuai minat dan
        bakat.</p>

    <div class="grid md:grid-cols-2 gap-4 mt-8">
        @forelse ($divisions as $division)
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold text-lg">{{ $division->name }}</h3>
                <p class="text-sm text-slate-600 mt-2">Divisi ini menjadi bagian dari kegiatan UKM Programming yang
                    aktif dalam pengembangan kemampuan anggota.</p>
            </div>
        @empty
            <div class="col-span-2 rounded-xl border border-dashed p-6 text-slate-500">
                Belum ada divisi yang tersedia saat ini.
            </div>
        @endforelse
    </div>
@endsection
