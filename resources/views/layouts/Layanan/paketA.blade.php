@extends('layouts.app')

@include('layouts.navbar')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-teal-50">

    {{-- Hero Section --}}
    <div class="relative bg-gradient-to-r from-emerald-700 via-teal-700 to-emerald-800 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
                <rect width="100" height="100" fill="url(#grid)"/>
            </svg>
        </div>
        <div class="absolute -bottom-1 left-0 right-0">
            <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#f0fdf4"/>
            </svg>
        </div>
        <div class="relative max-w-5xl mx-auto px-6 py-16 text-center">
            <a href="{{ route('layanan') }}" class="inline-flex items-center gap-2 text-emerald-100 hover:text-white text-sm font-medium mb-8 group transition-colors">
                <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali ke Layanan
            </a>
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full px-5 py-2 mb-6">
                <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.357L10 5.5l4.394 2.194a.999.999 0 01.356.357l2.644-1.131a1 1 0 000-1.84l-7-3z"/>
                    <path d="M9.796 11.913A1 1 0 019 11V6l-4 1.714V14a1 1 0 001.456.891L9 13.71V11.913z"/>
                    <path d="M11 11v2.104l2.544 1.09A1 1 0 0015 13.246V7.714L11 6v5z"/>
                </svg>
                <span class="text-white text-sm font-semibold tracking-wide">PKBM Rekan Indonesia</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 tracking-tight drop-shadow-lg">
                Kejar Paket A
            </h1>
            <p class="text-emerald-100 text-lg font-light max-w-xl mx-auto leading-relaxed">
                Program pendidikan kesetaraan Sekolah Dasar berbasis kurikulum Islami Teknoprenuer
            </p>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 py-12 space-y-12">

        {{-- Deskripsi Program --}}
        <div class="bg-white rounded-3xl shadow-xl border border-emerald-100 overflow-hidden">
            <div class="flex items-center gap-4 bg-gradient-to-r from-emerald-600 to-teal-600 px-8 py-5">
                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white tracking-wide">Tentang Program</h2>
            </div>
            <div class="px-8 py-7">
                <p class="text-gray-700 leading-relaxed text-base">
                    Program Kejar Paket A dibutuhkan untuk mendapatkan <span class="font-semibold text-emerald-700">Ijazah setara Sekolah Dasar</span>, agar anak dapat melanjutkan ke Jenjang SLTP umum atau Program Kejar Paket B. Program Kejar Paket A juga dibutuhkan masyarakat yang ingin menyelesaikan pendidikan tingkat Dasarnya namun terkendala umur yang sudah lewat masa sekolah.
                </p>
            </div>
        </div>

        {{-- Target Lulusan --}}
        <div>
            <div class="flex items-center gap-3 mb-6">
                <div class="w-1.5 h-8 bg-gradient-to-b from-emerald-500 to-teal-500 rounded-full"></div>
                <h2 class="text-2xl font-extrabold text-gray-800 tracking-tight">Target Lulusan Kurikulum Islami Teknoprenuer</h2>
            </div>

            <div class="grid gap-6">

                {{-- Target 1: 10 Karakter --}}
                <div class="bg-white rounded-3xl shadow-lg border border-emerald-100 overflow-hidden">
                    <div class="flex items-center gap-4 bg-gradient-to-r from-amber-500 to-orange-500 px-8 py-5">
                        <div class="flex-shrink-0 w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center text-white font-bold text-lg">1</div>
                        <h3 class="text-white font-bold text-lg">Mempunyai 10 Karakter Hebat Anak Muslim</h3>
                    </div>
                    <div class="px-8 py-6">
                        <div class="grid sm:grid-cols-2 gap-3">
                            @php
                                $karakter = [
                                    'Aku Cinta Allah & Rasulullah',
                                    'Aku Suka Mencontoh Rasulullah',
                                    'Aku Mau Jadi Anak Yang Jujur',
                                    'Aku Tidak Suka Marah',
                                    'Aku Mau Jadi Anak Yang Disiplin',
                                    'Aku Suka Berolahraga',
                                    'Aku Suka Menolong Ibu',
                                    'Aku Suka Menabung',
                                    'Aku Suka Belajar',
                                ];
                            @endphp
                            @foreach ($karakter as $index => $item)
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-amber-50 border border-amber-100 hover:border-amber-300 transition-colors">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-amber-500 text-white text-xs font-bold flex items-center justify-center mt-0.5">
                                    {{ chr(96 + $index + 1) }}
                                </span>
                                <span class="text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Target 2: Al-Qur'an --}}
                <div class="bg-white rounded-3xl shadow-lg border border-emerald-100 overflow-hidden">
                    <div class="flex items-center gap-4 bg-gradient-to-r from-emerald-600 to-green-600 px-8 py-5">
                        <div class="flex-shrink-0 w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center text-white font-bold text-lg">2</div>
                        <h3 class="text-white font-bold text-lg">Mempunyai Bacaan Al-Qur'an yang Tartil Sesuai Kaidah Tajwid Ustmani</h3>
                    </div>
                    <div class="px-8 py-6">
                        <div class="space-y-3">
                            @php
                                $quran = [
                                    ['label' => 'Level I', 'desc' => 'Pengenalan huruf hijaiyah dan cara membaca Al Qur\'an tingkat awal', 'jenis' => 'Praktek'],
                                    ['label' => 'Level II', 'desc' => 'Pengenalan dan penyempurnaan panjang pendek bacaan, idghom', 'jenis' => 'Praktek'],
                                    ['label' => 'Level III', 'desc' => 'Penyempurnaan bacaan pendek bacaan, idghom, hukum tajwid, makhroj', 'jenis' => 'Praktek'],
                                    ['label' => 'Level IV', 'desc' => 'Tahsin penyempurnaan panjang pendek bacaan, idghom, hukum tajwid, makhroj', 'jenis' => 'Teori dan Praktek'],
                                    ['label' => 'Level V', 'desc' => 'Tahsin I menguasai panjang pendek bacaan, idghom, hukum tajwid, makhroj, bacaan diluar kaidah, hadist', 'jenis' => 'Teori & Praktek (Sertifikat Mengajar Tahsin)'],
                                    ['label' => 'Talaqi I', 'desc' => 'Tahsin II menguasai panjang pendek bacaan, idghom, makhroj, bacaan di luar kaidah, hadist, dan syair Imam Ibnu Jazri', 'jenis' => 'Teori dan Praktek'],
                                    ['label' => 'Talaqi II', 'desc' => 'Setoran bacaan dan hafalan Juz 30', 'jenis' => 'Praktek'],
                                    ['label' => 'Tahfidz', 'desc' => 'Setoran bacaan dan hafalan Al Qur\'an', 'jenis' => 'Praktek'],
                                ];
                            @endphp
                            @foreach ($quran as $item)
                            <div class="flex gap-4 p-4 rounded-xl bg-emerald-50 border border-emerald-100 hover:border-emerald-300 transition-colors">
                                <div class="flex-shrink-0">
                                    <span class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full whitespace-nowrap">{{ $item['label'] }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-gray-700 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                                    <span class="inline-block mt-1.5 text-xs text-emerald-700 font-semibold bg-emerald-100 px-2 py-0.5 rounded-md">{{ $item['jenis'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Target 3-5 --}}
                <div class="grid sm:grid-cols-3 gap-4">
                    @php
                        $targets = [
                            ['num' => '3', 'icon' => '📖', 'title' => 'Hafalan 2 Juz', 'desc' => 'Mempunyai hafalan minimal 2 juz Al-Qur\'an', 'color' => 'from-violet-500 to-purple-600'],
                            ['num' => '4', 'icon' => '✅', 'title' => 'Program Selesai', 'desc' => 'Menyelesaikan seluruh program pembelajaran', 'color' => 'from-blue-500 to-cyan-600'],
                            ['num' => '5', 'icon' => '💼', 'title' => 'Keterampilan Hidup', 'desc' => 'Mempunyai keterampilan untuk memenuhi kebutuhan hidup', 'color' => 'from-rose-500 to-pink-600'],
                        ];
                    @endphp
                    @foreach ($targets as $t)
                    <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-br {{ $t['color'] }} p-5 text-center">
                            <div class="text-3xl mb-1">{{ $t['icon'] }}</div>
                            <div class="text-white font-bold text-base">{{ $t['title'] }}</div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600 text-sm text-center leading-relaxed">{{ $t['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        {{-- Persyaratan --}}
        <div class="bg-white rounded-3xl shadow-xl border border-emerald-100 overflow-hidden">
            <div class="flex items-center gap-4 bg-gradient-to-r from-teal-600 to-emerald-700 px-8 py-5">
                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white">Persyaratan Pendaftaran</h2>
                    <p class="text-emerald-100 text-sm">Program Paket A Setara SD – PKBM Rekan Indonesia</p>
                </div>
            </div>
            <div class="px-8 py-7">
                <div class="grid sm:grid-cols-2 gap-4">
                    @php
                        $syarat = [
                            'FC Akte Kelahiran (1 lembar)',
                            'FC Kartu Keluarga / KK (1 lembar)',
                            'FC KTP Siswa (1 lembar)',
                            'FC KTP Orang Tua – Ayah/Ibu (1 lembar)',
                            'Pas Foto 3×4 – formal, background merah, baju putih (4 lembar)',
                            'Pembayaran administrasi pendaftaran',
                        ];
                    @endphp
                    @foreach ($syarat as $index => $item)
                    <div class="flex items-start gap-3 p-4 rounded-xl bg-teal-50 border border-teal-100 hover:border-teal-300 transition-colors">
                        <span class="flex-shrink-0 w-7 h-7 rounded-full bg-teal-600 text-white text-xs font-bold flex items-center justify-center mt-0.5">
                            {{ $index + 1 }}
                        </span>
                        <span class="text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="mt-6 p-5 rounded-2xl bg-gradient-to-r from-emerald-600 to-teal-600 flex flex-col sm:flex-row items-center gap-4">
                    <div class="text-white flex-1">
                        <p class="font-bold text-base">Siap mendaftar?</p>
                        <p class="text-emerald-100 text-sm mt-0.5">Hubungi kami untuk informasi lebih lanjut tentang program Kejar Paket A</p>
                    </div>
                    <a href="#" class="flex-shrink-0 bg-white text-emerald-700 font-bold text-sm px-6 py-3 rounded-xl hover:bg-emerald-50 transition-colors shadow-md whitespace-nowrap">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
