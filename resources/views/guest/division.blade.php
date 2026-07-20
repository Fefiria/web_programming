@extends('guest.layouts.main')

@section('content')
    <section class="bg-white rounded-2xl shadow-sm border p-8">
        <h1 class="text-3xl font-bold text-slate-900">Divisi UKM Programming</h1>
        <p class="text-slate-600 mt-2">Setiap divisi memiliki fokus dan peluang belajar yang berbeda sesuai minat dan bakat.
        </p>

        <div class="grid md:grid-cols-2 gap-4 mt-8">
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold text-lg">Web Development</h3>
                <p class="text-sm text-slate-600 mt-2">Mempelajari frontend dan backend, membangun aplikasi web dari konsep
                    hingga deployment.</p>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold text-lg">UI/UX Design</h3>
                <p class="text-sm text-slate-600 mt-2">Berkreasi membuat wireframe, prototype, dan pengalaman pengguna yang
                    nyaman.</p>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold text-lg">Mobile Development</h3>
                <p class="text-sm text-slate-600 mt-2">Menjelajahi pengembangan aplikasi mobile dengan pendekatan modern dan
                    praktis.</p>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold text-lg">Data & AI</h3>
                <p class="text-sm text-slate-600 mt-2">Mengembangkan kemampuan analisis data, machine learning, dan
                    otomatisasi.</p>
            </div>
        </div>
    </section>
@endsection
