@extends('guest.layouts.main')

@section('content')
    <div class="space-y-6">
        <section class="bg-white rounded-2xl shadow-sm border p-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span
                        class="inline-flex items-center rounded-full bg-blue-100 text-blue-700 px-3 py-1 text-sm font-semibold">UKM
                        Programming</span>
                    <h1 class="text-4xl font-bold text-slate-900 mt-4">Bangun kreativitas bersama komunitas teknologi.</h1>
                    <p class="text-slate-600 mt-3 text-lg">
                        Temukan ruang belajar, bertukar ide, dan mengembangkan kemampuan digital melalui kegiatan komunitas
                        yang aktif dan inspiratif.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ url('/division') }}"
                            class="bg-slate-900 text-white px-5 py-3 rounded-lg hover:bg-slate-700">Lihat Divisi</a>
                        <a href="{{ url('/contact') }}"
                            class="border border-slate-300 px-5 py-3 rounded-lg hover:bg-slate-50">Hubungi Kami</a>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl p-4 shadow-sm border">
                            <div class="text-3xl font-bold text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Anggota aktif</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm border">
                            <div class="text-3xl font-bold text-slate-900">12</div>
                            <div class="text-sm text-slate-600">Kegiatan per bulan</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm border col-span-2">
                            <div class="text-sm font-semibold text-slate-700">Agenda utama</div>
                            <div class="mt-2 text-slate-600">Workshop web development, UI/UX challenge, mentoring, dan
                                project showcase.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
