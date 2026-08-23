@extends('guest.layouts.main')
@section('card-title', 'Hubungi Kami')
@section('card-content')

    <p class="text-slate-600 mt-2">Tertarik bergabung? Kirimkan pertanyaan atau ajukan kerjasama melalui kontak berikut.
    </p>

    <div class="grid md:grid-cols-2 gap-6 mt-8">
        <div class="border rounded-xl p-5">
            <h3 class="font-semibold">Informasi Kontak</h3>
            <ul class="text-slate-600 mt-3 space-y-2">
                <li><i class="bi bi-envelope"></i> Email: ukmprogramming@example.com</li>
                <li><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/programming.umdp/"
                        target="_blank">@ukmprogramming</a></li>
                <li><i class="bi bi-whatsapp"></i> +62 853-5361-3904</li>
            </ul>
        </div>
    </div>
@endsection
