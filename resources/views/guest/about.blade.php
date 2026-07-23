@extends('guest.layouts.main')

@section('card-title', 'Tentang Kami')
@section('card-content')
    <section class="bg-white rounded-2xl shadow-sm border p-8">
        <div class="max-w-3xl">
            <h1 class="text-3xl font-bold text-slate-900">Tentang UKM Programming</h1>
            <p class="text-slate-600 mt-4">
                UKM Programming merupakan wadah bagi mahasiswa yang ingin mengembangkan kemampuan di bidang teknologi
                informasi, khususnya pemrograman, pengembangan web, desain antarmuka, dan kolaborasi proyek.
            </p>
            <p class="text-slate-600 mt-3">
                Kami berkomitmen menciptakan lingkungan belajar yang kolaboratif, berorientasi pada praktik, dan membangun
                karakter profesional sejak dini.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-4 mt-8">
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold">Visi</h3>
                <p class="text-sm text-slate-600 mt-2">Menjadi komunitas unggul dalam inovasi teknologi dan pengembangan
                    talenta digital.</p>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold">Misi</h3>
                <p class="text-sm text-slate-600 mt-2">Mendorong belajar berkelanjutan, membangun portofolio, dan menguatkan
                    jiwa kolaboratif.</p>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold">Nilai</h3>
                <p class="text-sm text-slate-600 mt-2">Kreatif, disiplin, terbuka, dan siap berkontribusi bagi sesama.</p>
            </div>
        </div>
    </section>
@endsection
