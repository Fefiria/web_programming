<x-guest-layout>
    <div class="max-w-xl mx-auto rounded-xl border border-green-200 bg-green-50 p-6 shadow-sm">
        <h2 class="text-2xl font-semibold text-slate-900">Pendaftaran Anda sedang diproses</h2>
        <p class="mt-3 text-sm text-slate-600">
            Terima kasih telah mendaftar sebagai calon anggota UKM. Formulir Anda sudah berhasil dikirim.
        </p>
        <p class="mt-3 text-sm text-slate-600">
            Silakan tunggu hingga admin mengonfirmasi pendaftaran Anda. Setelah disetujui, Anda akan resmi menjadi
            anggota UKM.
        </p>
        <div class="mt-5">
            <a href="{{ route('home') }}"
                class="inline-flex items-center rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</x-guest-layout>
