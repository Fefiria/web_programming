@extends('guest.layouts.main')

@section('content')
    <section class="bg-white rounded-2xl shadow-sm border p-8">
        <h1 class="text-3xl font-bold text-slate-900">Hubungi Kami</h1>
        <p class="text-slate-600 mt-2">Tertarik bergabung? Kirimkan pertanyaan atau ajukan kerjasama melalui kontak berikut.
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-8">
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold">Informasi Kontak</h3>
                <ul class="text-slate-600 mt-3 space-y-2">
                    <li>Email: ukmprogramming@example.com</li>
                    <li>Instagram: @ukmprogramming</li>
                    <li>Whatsapp: +62 812-3456-7890</li>
                </ul>
            </div>
            <div class="border rounded-xl p-5">
                <h3 class="font-semibold">Kirim Pesan</h3>
                <form class="mt-3 space-y-3">
                    <input type="text" placeholder="Nama" class="w-full border rounded-lg px-3 py-2">
                    <input type="email" placeholder="Email" class="w-full border rounded-lg px-3 py-2">
                    <textarea rows="4" placeholder="Pesan" class="w-full border rounded-lg px-3 py-2"></textarea>
                    <button type="button" class="bg-slate-900 text-white px-5 py-2 rounded-lg">Kirim</button>
                </form>
            </div>
        </div>
    </section>
@endsection
