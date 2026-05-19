@extends('layouts.app')

@include('layouts.navbar')
<div class="min-h-screen bg-gradient-to-br from-green-50 via-white to-emerald-50">

    {{-- Hero Section --}}
    <div class="relative bg-gradient-to-r from-emerald-700 via-green-700 to-teal-800 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
                </pattern>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
        <div class="absolute -bottom-1 left-0 right-0">
            <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#f0fdf4" />
            </svg>
        </div>
        <div class="relative max-w-5xl mx-auto px-6 py-16 text-center">
            <a href="{{ route('layanan') }}"
                class="inline-flex items-center gap-2 text-green-100 hover:text-white text-sm font-medium mb-8 group transition-colors">
                <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Layanan
            </a>
            <div
                class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full px-5 py-2 mb-6">
                <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.357L10 5.5l4.394 2.194a.999.999 0 01.356.357l2.644-1.131a1 1 0 000-1.84l-7-3z" />
                    <path d="M9.796 11.913A1 1 0 019 11V6l-4 1.714V14a1 1 0 001.456.891L9 13.71V11.913z" />
                    <path d="M11 11v2.104l2.544 1.09A1 1 0 0015 13.246V7.714L11 6v5z" />
                </svg>
                <span class="text-white text-sm font-semibold tracking-wide">PKBM Rekan Indonesia</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 tracking-tight drop-shadow-lg">
                Kejar Paket C
            </h1>
            <p class="text-green-100 text-lg font-light max-w-xl mx-auto leading-relaxed">
                Program Pendidikan Kesetaraan setara SMA berbasis kurikulum Islami Teknoprenuer
            </p>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 py-12 space-y-12">

        {{-- Deskripsi Program --}}
        <div class="bg-white rounded-3xl shadow-xl border border-green-100 overflow-hidden">
            <div class="flex items-center gap-4 bg-gradient-to-r from-emerald-600 to-teal-600 px-8 py-5">
                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white tracking-wide">Tentang Program</h2>
            </div>
            <div class="px-8 py-7 space-y-4">
                <p class="text-gray-700 leading-relaxed text-base">
                    <span class="font-semibold text-emerald-700">Paket C Setara SMA</span> adalah Program Pendidikan
                    Kesetaraan (Paket) Pendidikan Non Formal yang setara dengan SMA. Program ini merupakan jalur
                    alternatif dari Kementerian Pendidikan dan Kebudayaan bagi masyarakat yang tidak mendapatkan
                    kesempatan untuk mengikuti pendidikan formal karena berbagai alasan, seperti menempuh pendidikan non
                    formal, putus sekolah, keterbatasan sosial, ekonomi, waktu, kesempatan, dan geografi.
                </p>
                <p class="text-gray-700 leading-relaxed text-base">
                    Dengan menyelesaikan program Paket C, siswa akan memperoleh <span
                        class="font-semibold text-emerald-700">ijazah setara dengan ijazah SMA</span> yang dapat
                    digunakan untuk melanjutkan pendidikan ke perguruan tinggi atau universitas ataupun sebagai syarat
                    kerja.
                </p>

                {{-- Peserta yang Cocok --}}
                <div class="mt-2 p-5 rounded-2xl bg-emerald-50 border border-emerald-100">
                    <p class="text-sm font-semibold text-emerald-700 mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        Peserta Paket C Setara SMA
                    </p>
                    <p class="text-sm text-gray-600 mb-3 leading-relaxed">Program ini sangat cocok untuk yang menempuh
                        pendidikan non-formal, seperti:</p>
                    <div class="grid sm:grid-cols-2 gap-2">
                        @php
                            $peserta = [
                                'Siswa putus sekolah setingkat SMA',
                                'Siapapun yang tidak lulus setingkat SMA dan/atau sudah lewat umur SMA',
                                'Pekerja yang membutuhkan ijazah setingkat SMA',
                                'Santri Pesantren setingkat SMA',
                                'Siswa Kuttab setingkat SMA',
                                'Anak Homeschooling setingkat SMA',
                            ];
                        @endphp
                        @foreach ($peserta as $item)
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Kegunaan Ijazah --}}
                <div class="p-5 rounded-2xl bg-teal-50 border border-teal-100">
                    <p class="text-sm font-semibold text-teal-700 mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Kegunaan Ijazah Paket C
                    </p>
                    <div class="grid sm:grid-cols-2 gap-2">
                        @foreach (['Melamar pekerjaan', 'Melanjutkan ke Perguruan Tinggi / Universitas', 'Melanjutkan ke Diploma / Akademi', 'Setara dengan Ijazah SMA resmi'] as $guna)
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <svg class="w-4 h-4 text-teal-500 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $guna }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Target Lulusan --}}
        <div>
            <div class="flex items-center gap-3 mb-6">
                <div class="w-1.5 h-8 bg-gradient-to-b from-emerald-500 to-teal-500 rounded-full"></div>
                <h2 class="text-2xl font-extrabold text-gray-800 tracking-tight">Target Lulusan Kurikulum Islami
                    Teknoprenuer</h2>
            </div>

            <div class="grid gap-6">

                {{-- Target 1: 10 Karakter Pribadi Muslim --}}
                <div class="bg-white rounded-3xl shadow-lg border border-green-100 overflow-hidden">
                    <div class="flex items-center gap-4 bg-gradient-to-r from-amber-500 to-orange-500 px-8 py-5">
                        <div
                            class="flex-shrink-0 w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center text-white font-bold text-lg">
                            1</div>
                        <h3 class="text-white font-bold text-lg">Mengamalkan 10 Karakter Pribadi Muslim</h3>
                    </div>
                    <div class="px-8 py-6">
                        <div class="grid sm:grid-cols-2 gap-3">
                            @php
                                $karakter = [
                                    ['arab' => 'Salimul Aqidah', 'arti' => 'Aqidahnya bersih'],
                                    ['arab' => 'Shahihul Ibadah', 'arti' => 'Ibadah yang benar'],
                                    ['arab' => 'Ahsanul Khuluq', 'arti' => 'Akhlaqnya yang baik'],
                                    ['arab' => "Qadirul 'Alal Kasb", 'arti' => 'Mampu untuk berusaha'],
                                    ['arab' => 'Mutsaqaful Fiqr', 'arti' => 'Pola fikir yang intelek'],
                                    ['arab' => 'Qawiyul Jism', 'arti' => 'Fisik yang kuat'],
                                    ['arab' => 'Mujahidu Linafsihi', 'arti' => 'Berusaha bersungguh-sungguh'],
                                    ['arab' => "Munazham Fi Syu'unihi", 'arti' => 'Teratur dalam semua urusan'],
                                    ['arab' => "Haritsun 'Ala Waqtihi", 'arti' => 'Efisien menjaga waktu'],
                                    ['arab' => "Nafi'un Lighairihi", 'arti' => 'Berguna kepada orang lain'],
                                ];
                            @endphp
                            @foreach ($karakter as $index => $item)
                                <div
                                    class="flex items-start gap-3 p-3 rounded-xl bg-amber-50 border border-amber-100 hover:border-amber-300 transition-colors">
                                    <span
                                        class="flex-shrink-0 w-7 h-7 rounded-full bg-amber-500 text-white text-xs font-bold flex items-center justify-center mt-0.5">
                                        {{ chr(96 + $index + 1) }}
                                    </span>
                                    <div>
                                        <p class="text-gray-800 text-sm font-semibold">{{ $item['arab'] }}</p>
                                        <p class="text-gray-500 text-xs mt-0.5">{{ $item['arti'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Target 2: Al-Qur'an --}}
                <div class="bg-white rounded-3xl shadow-lg border border-green-100 overflow-hidden">
                    <div class="flex items-center gap-4 bg-gradient-to-r from-emerald-600 to-green-600 px-8 py-5">
                        <div
                            class="flex-shrink-0 w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center text-white font-bold text-lg">
                            2</div>
                        <h3 class="text-white font-bold text-lg">Mempunyai Bacaan Al-Qur'an yang Tartil Sesuai Kaidah
                            Tajwid Ustmani</h3>
                    </div>
                    <div class="px-8 py-6">
                        <div class="space-y-3">
                            @php
                                $quran = [
                                    [
                                        'label' => 'Level I',
                                        'desc' => 'Pengenalan huruf hijaiyah dan cara membaca Al Qur\'an tingkat awal',
                                        'jenis' => 'Praktek',
                                    ],
                                    [
                                        'label' => 'Level II',
                                        'desc' => 'Pengenalan dan penyempurnaan panjang pendek bacaan, idghom',
                                        'jenis' => 'Praktek',
                                    ],
                                    [
                                        'label' => 'Level III',
                                        'desc' => 'Penyempurnaan bacaan pendek bacaan, idghom, hukum tajwid, makhroj',
                                        'jenis' => 'Praktek',
                                    ],
                                    [
                                        'label' => 'Level IV',
                                        'desc' =>
                                            'Tahsin penyempurnaan panjang pendek bacaan, idghom, hukum tajwid, makhroj',
                                        'jenis' => 'Teori dan Praktek',
                                    ],
                                    [
                                        'label' => 'Level V',
                                        'desc' =>
                                            'Tahsin I menguasai panjang pendek bacaan, idghom, hukum tajwid, makhroj, bacaan diluar kaidah, hadist',
                                        'jenis' => 'Teori dan Praktek (Sertifikat Mengajar Tahsin)',
                                    ],
                                    [
                                        'label' => 'Talaqi I',
                                        'desc' =>
                                            'Tahsin II menguasai panjang pendek bacaan, idghom, makhroj, bacaan di luar kaidah, hadist, dan syair Imam Ibnu Jazri',
                                        'jenis' => 'Teori dan Praktek',
                                    ],
                                    [
                                        'label' => 'Talaqi II',
                                        'desc' => 'Setoran bacaan dan hafalan Juz 30',
                                        'jenis' => 'Praktek',
                                    ],
                                    [
                                        'label' => 'Tahfidz',
                                        'desc' => 'Setoran bacaan dan hafalan Al Qur\'an',
                                        'jenis' => 'Praktek',
                                    ],
                                ];
                            @endphp
                            @foreach ($quran as $item)
                                <div
                                    class="flex gap-4 p-4 rounded-xl bg-emerald-50 border border-emerald-100 hover:border-emerald-300 transition-colors">
                                    <div class="flex-shrink-0">
                                        <span
                                            class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full whitespace-nowrap">{{ $item['label'] }}</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-gray-700 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                                        <span
                                            class="inline-block mt-1.5 text-xs text-emerald-700 font-semibold bg-emerald-100 px-2 py-0.5 rounded-md">{{ $item['jenis'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Target 3-6 --}}
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @php
                        $targets = [
                            [
                                'num' => '3',
                                'icon' => '📖',
                                'title' => 'Hafalan 3 Juz',
                                'desc' => 'Mempunyai hafalan minimal 3 juz Al-Qur\'an',
                                'color' => 'from-violet-500 to-purple-600',
                            ],
                            [
                                'num' => '4',
                                'icon' => '✅',
                                'title' => 'Program Selesai',
                                'desc' => 'Menyelesaikan seluruh program pembelajaran',
                                'color' => 'from-teal-500 to-cyan-600',
                            ],
                            [
                                'num' => '5',
                                'icon' => '💼',
                                'title' => 'Siap Dunia Kerja',
                                'desc' => 'Mempunyai keterampilan untuk memenuhi tuntutan dunia kerja dan usaha',
                                'color' => 'from-blue-500 to-indigo-600',
                            ],
                            [
                                'num' => '6',
                                'icon' => '🚀',
                                'title' => 'Projek Interprenuer',
                                'desc' => 'Membuat projek interprenuer sebagai syarat kelulusan',
                                'color' => 'from-rose-500 to-pink-600',
                            ],
                        ];
                    @endphp
                    @foreach ($targets as $t)
                        <div
                            class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
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
        <div class="bg-white rounded-3xl shadow-xl border border-green-100 overflow-hidden">
            <div class="flex items-center gap-4 bg-gradient-to-r from-emerald-600 to-teal-700 px-8 py-5">
                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white">Persyaratan Pendaftaran</h2>
                    <p class="text-green-100 text-sm">Program Paket C Setara SMA – PKBM Rekan Indonesia</p>
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
                        <div
                            class="flex items-start gap-3 p-4 rounded-xl bg-emerald-50 border border-emerald-100 hover:border-emerald-300 transition-colors">
                            <span
                                class="flex-shrink-0 w-7 h-7 rounded-full bg-emerald-600 text-white text-xs font-bold flex items-center justify-center mt-0.5">
                                {{ $index + 1 }}
                            </span>
                            <span class="text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>

                <div
                    class="mt-6 p-5 rounded-2xl bg-gradient-to-r from-emerald-600 to-teal-600 flex flex-col sm:flex-row items-center gap-4">
                    <div class="text-white flex-1">
                        <p class="font-bold text-base">Siap mendaftar?</p>
                        <p class="text-green-100 text-sm mt-0.5">Hubungi kami untuk informasi lebih lanjut tentang
                            program Kejar Paket C</p>
                    </div>
                    <a href="#"
                        class="flex-shrink-0 bg-white text-emerald-700 font-bold text-sm px-6 py-3 rounded-xl hover:bg-emerald-50 transition-colors shadow-md whitespace-nowrap">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
