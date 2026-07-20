@extends('guest.layouts.main')

@section('content')
    <section class="bg-white rounded-2xl shadow-sm border p-8">
        <h1 class="text-3xl font-bold text-slate-900">Galeri Kegiatan</h1>
        <p class="text-slate-600 mt-2">Dokumentasi aktivitas UKM Programming dalam proses belajar, berkarya, dan
            bersosialisasi.</p>

        <div class="grid md:grid-cols-3 gap-4 mt-8">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80"
                alt="Workshop" class="rounded-xl h-56 w-full object-cover">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80"
                alt="Diskusi" class="rounded-xl h-56 w-full object-cover">
            <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=800&q=80"
                alt="Project" class="rounded-xl h-56 w-full object-cover">
        </div>
    </section>
@endsection
