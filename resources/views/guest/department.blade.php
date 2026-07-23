@extends('guest.layouts.main')
@section('card-title', 'Departemen')
@section('card-content')
    <h1 class="text-3xl font-bold text-slate-900">Departemen UKM Programming</h1>
    <p class="text-slate-600 mt-2">Setiap departemen memiliki peran dan tanggung jawab yang berbeda dalam mendukung
        kegiatan UKM Programming.</p>

    <div class="grid md:grid-cols-2 gap-4 mt-8">
        <div class="border rounded-xl p-5">
            <h3 class="font-semibold text-lg">Departemen Pendidikan</h3>
            <p class="text-sm text-slate-600 mt-2">Bertanggung jawab dalam menyelenggarakan pelatihan, workshop, dan
                mentoring bagi anggota.</p>
        </div>
        <div class="border rounded-xl p-5">
            <h3 class="font-semibold text-lg">Departemen Proyek</h3>
            <p class="text-sm text-slate-600 mt-2">Mengelola proyek internal dan kolaborasi eksternal untuk mengasah
                kemampuan praktis anggota.</p>
        </div>
        <div class="border rounded-xl p-5">
            <h3 class="font-semibold text-lg">Departemen Kreatif</h3>
            <p class="text-sm text-slate-600 mt-2">Menciptakan konten visual, desain, dan branding untuk mendukung
                kegiatan UKM Programming.</p>
        </div>
        <div class="border rounded-xl p-5">
            <h3 class="font-semibold text-lg">Departemen Hubungan Masyarakat</h3>
            <p class="text-sm text-slate-600 mt-2">Menjalin komunikasi dengan pihak eksternal, mengelola media sosial,
                dan mempromosikan kegiatan UKM Programming.</p>
        </div>
    </div>
@endsection
