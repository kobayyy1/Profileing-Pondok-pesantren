@extends('layouts.app')

@section('title', 'Hubungi Kami – Pondok Pesantren Daar Al-Ilmi EMIISc')
@include('layouts.navbar')

{{-- ─────────────────────── HERO SECTION ─────────────────────── --}}
<section class="relative pt-20 overflow-hidden">
    <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 min-h-[240px] flex items-center">
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-red-600/10 rounded-full blur-2xl"></div>

        <div class="container mx-auto px-6 py-10 relative z-10 text-center md:text-left">
            <span
                class="inline-block bg-red-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-3">
                Layanan Informasi
            </span>
            <h1 class="font-['Playfair_Display'] text-3xl md:text-4xl text-white font-bold leading-tight mb-2">
                Hubungi Kami
            </h1>
            <p class="text-blue-100 text-xs md:text-sm max-w-xl font-sans">
                Punya pertanyaan mengenai program pendidikan, fasilitas asrama, atau pendaftaran santri baru? Tim kami
                siap membantu Anda.
            </p>
        </div>
    </div>
    <div class="wave-divider -mt-1">
        <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-10">
            <path d="M0,20 C360,40 1080,0 1440,20 L1440,40 L0,40 Z" fill="#ffffff" />
        </svg>
    </div>
</section>

{{-- ─────────────────────── CORE CONTENT (DOMINAN PUTIH) ─────────────────────── --}}
<section class="py-12 px-4 bg-white">
    <div class="container mx-auto max-w-5xl">
        <div class="grid md:grid-cols-12 gap-10 items-start">

            <div class="md:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold text-red-600 tracking-widest uppercase">Kontak Resmi</span>
                    <h2 class="font-['Playfair_Display'] text-2xl text-blue-900 font-bold mt-1 mb-3">Informasi
                        Sekretariat</h2>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Silakan datang langsung ke kantor sekretariat PPDB atau hubungi kami melalui saluran komunikasi
                        resmi di bawah ini.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-3 p-4 bg-slate-50 border border-slate-100 rounded-xl">
                        <div
                            class="w-9 h-9 bg-blue-100 text-blue-700 rounded-lg flex items-center justify-center text-sm shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text-xs">
                            <h4 class="font-bold text-gray-800 mb-0.5">Alamat Kampus</h4>
                            <p class="text-gray-600 leading-relaxed">Jl. Condet Raya Kav. Lingkungan 7 No. 27, Jakarta
                                Timur, DKI Jakarta</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-4 bg-slate-50 border border-slate-100 rounded-xl">
                        <div
                            class="w-9 h-9 bg-blue-100 text-blue-700 rounded-lg flex items-center justify-center text-sm shrink-0">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text-xs">
                            <h4 class="font-bold text-gray-800 mb-0.5">Telepon & WhatsApp</h4>
                            <p class="text-gray-600 mb-0.5">0858-8303-7990 (PPDB / Admin)</p>
                            <p class="text-gray-400">Jam Kerja: 08.00 - 20.00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-4 bg-slate-50 border border-slate-100 rounded-xl">
                        <div
                            class="w-9 h-9 bg-red-50 text-red-600 rounded-lg flex items-center justify-center text-sm shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text-xs">
                            <h4 class="font-bold text-gray-800 mb-0.5">Email Resmi</h4>
                            <p class="text-gray-600">info@daaralilmi-emiisc.sch.id</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-7 bg-slate-50 rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm">
                <div class="mb-6">
                    <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950">Kirim Pesan Langsung</h3>
                    <p class="text-xs text-gray-500 mt-1">Pesan Anda akan langsung diteruskan ke inbox email utama
                        panitia asrama.</p>
                </div>

                @if (session('success'))
                    <div
                        class="mb-4 p-3 bg-green-100 border border-green-200 text-green-800 rounded-lg text-xs font-semibold flex items-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('hubungi.kirim') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Nama Lengkap</label>
                        <input type="text" name="name" required placeholder="Masukkan nama Anda..."
                            class="w-full border border-gray-300 bg-white rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Alamat Email
                            Anda</label>
                        <input type="email" name="email" required placeholder="Contoh: nama@gmail.com"
                            class="w-full border border-gray-300 bg-white rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Isi Pesan /
                            Pertanyaan</label>
                        <textarea name="message" rows="5" required placeholder="Tuliskan pertanyaan Anda secara detail di sini..."
                            class="w-full border border-gray-300 bg-white rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 resize-none"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-lg transition-colors text-xs shadow-md shadow-blue-900/10 uppercase tracking-wider flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane text-xs"></i> Kirim Ke Email Pesantren
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
