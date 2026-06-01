<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami – Pondok Pesantren Daar Al-Ilmi EMIISc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,800;1,600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    @include('layouts.Tentangkami.style')
</head>

<!-- Mengubah background utama menjadi putih/abu-abu super terang agar dominan putih -->

<body class="bg-slate-50 text-gray-800">

    @include('layouts.navbar')

    {{-- ─────────────────────── HERO BANNER ─────────────────────── --}}
    <section class="relative pt-20 overflow-hidden">
        <!-- Mengubah tema Hero menjadi kombinasi Biru Gelap yang megah -->
        <div class="geo-bg bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 min-h-[340px] flex items-center">
            <!-- Decorative circles -->
            <div class="absolute top-8 right-16 w-48 h-48 rounded-full border-2 border-white/10 float-anim"></div>
            <div class="absolute top-16 right-28 w-28 h-28 rounded-full border border-white/10 float-anim"
                style="animation-delay:.8s"></div>
            <div class="absolute -bottom-6 left-10 w-36 h-36 rounded-full bg-blue-600/20"></div>

            <div class="container mx-auto px-6 py-16 relative z-10">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-blue-200 text-sm mb-5">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white font-semibold">Tentang Kami</span>
                </div>

                <div class="max-w-2xl">
                    <!-- Badge aksen Merah -->
                    <span
                        class="inline-block bg-red-500/20 text-red-200 text-xs font-semibold px-4 py-1.5 rounded-full border border-red-400/30 mb-4 tracking-widest uppercase">
                        Mengenal Lebih Dekat
                    </span>
                    <h1 class="font-display text-4xl md:text-5xl text-white leading-tight mb-4">
                        Pondok Pesantren<br>
                        <span class="italic text-red-400">Daar Al-Ilmi EMIISc</span>
                    </h1>
                    <p class="text-blue-100 text-base leading-relaxed max-w-lg">
                        Lembaga pendidikan Islam modern yang memadukan ilmu agama dan teknologi untuk mencetak generasi
                        Muslim berdaya saing global.
                    </p>
                </div>
            </div>
        </div>

        <!-- Wave divider diubah warnanya menjadi putih bersih murni (#ffffff) -->
        <div class="wave-divider -mt-1">
            <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                class="w-full h-14">
                <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#ffffff" />
            </svg>
        </div>
    </section>

    <!-- Section Quotes Dominan Putih -->
    <section class="bg-white py-10 px-4">
        <div class="container mx-auto max-w-3xl text-center reveal">
            <div class="bg-slate-50 rounded-2xl shadow-sm border border-blue-50 px-8 py-8">
                <div class="text-3xl text-blue-400 mb-3"><i class="fas fa-quote-left"></i></div>
                <p class="arabic-quote mb-3">اطْلُبُوا الْعِلْمَ مِنَ الْمَهْدِ إِلَى اللَّحْد</p>
                <p class="text-sm text-gray-500 italic">"Tuntutlah ilmu dari buaian hingga liang lahat"</p>
                <p class="text-xs text-blue-600 font-semibold mt-2">— Al-Hadits</p>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── PROFIL SINGKAT ─────────────────────── --}}
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Teks -->
                <div class="reveal">
                    <span class="text-xs font-bold text-red-600 tracking-widest uppercase">Profil Pesantren</span>
                    <h2 class="font-display text-3xl md:text-4xl text-blue-950 mt-2 mb-5 leading-snug">
                        Tempat Ilmu &amp;<br>Akhlak Bertemu
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Pondok Pesantren Daar Al-Ilmi EMIISc berdiri sejak tahun 1998 di jantung Jakarta Timur. Berakar
                        pada
                        tradisi pesantren klasik, kami berkembang menjadi lembaga modern yang mengintegrasikan
                        kurikulum nasional, pendidikan karakter Islami, dan keterampilan abad 21.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dengan lingkungan asrama yang kondusif, santri kami tumbuh menjadi pribadi yang cakap secara
                        intelektual, kuat secara spiritual, dan siap bersaing di era global tanpa meninggalkan
                        identitas keislaman mereka.
                    </p>
                    <!-- Tombol Biru Utama -->
                    <a href="{{ url('/daftar') }}"
                        class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-6 py-3 rounded-lg transition-colors shadow-md shadow-blue-700/10">
                        Daftar Sekarang <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <!-- Gambar + badge -->
                <div class="reveal relative">
                    <div class="rounded-2xl overflow-hidden shadow-xl aspect-[4/3] bg-blue-50">
                        <img src="{{ asset('images/boarding.jpg') }}" alt="Suasana Pesantren"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Badge tahun berdiri (Biru) -->
                    <div
                        class="absolute -bottom-5 -left-5 bg-white rounded-xl shadow-lg px-5 py-4 border border-blue-100">
                        <div class="text-3xl font-display font-bold text-blue-700">1998</div>
                        <div class="text-xs text-gray-500 font-medium">Tahun Berdiri</div>
                    </div>
                    <!-- Badge santri (Merah) -->
                    <div class="absolute -top-4 -right-4 bg-red-600 rounded-xl shadow-lg px-5 py-4">
                        <div class="text-2xl font-display font-bold text-white">1.200+</div>
                        <div class="text-xs text-red-100 font-medium">Santri Actif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── STATISTIK ─────────────────────── --}}
    <section class="py-14 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <!-- Mengubah skema warna array statistik menjadi pola Biru dan Merah alternatif -->
                @php
                    $stats = [
                        [
                            'icon' => 'fa-user-graduate',
                            'value' => '1.200+',
                            'label' => 'Santri Aktif',
                            'color' => 'blue',
                        ],
                        [
                            'icon' => 'fa-chalkboard-teacher',
                            'value' => '85+',
                            'label' => 'Ustadz & Pengajar',
                            'color' => 'red',
                        ],
                        ['icon' => 'fa-book-open', 'value' => '25+', 'label' => 'Program Studi', 'color' => 'blue'],
                        ['icon' => 'fa-award', 'value' => '40+', 'label' => 'Prestasi Nasional', 'color' => 'red'],
                    ];
                @endphp

                @foreach ($stats as $s)
                    <div
                        class="stat-card reveal bg-gradient-to-br
                    @if ($s['color'] === 'blue') from-blue-50/60 to-indigo-50/20 border-blue-100
                    @else from-red-50/60 to-orange-50/20 border-red-100 @endif
                    border rounded-2xl p-6 text-center">
                        <div
                            class="w-12 h-12 rounded-xl
                        @if ($s['color'] === 'blue') bg-blue-100 text-blue-700
                        @else bg-red-100 text-red-600 @endif
                        flex items-center justify-center mx-auto mb-3 text-xl">
                            <i class="fas {{ $s['icon'] }}"></i>
                        </div>
                        <div
                            class="font-display text-3xl font-bold
                        @if ($s['color'] === 'blue') text-blue-900
                        @else text-red-700 @endif
                        mb-1">
                            {{ $s['value'] }}</div>
                        <div class="text-sm text-gray-500 font-medium">{{ $s['label'] }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ─────────────────────── VISI & MISI ─────────────────────── --}}
    <!-- Mengubah section ini menjadi latar belakar putih/terang agar dominan putih terpenuhi -->
    <section class="py-16 px-4 diagonal-strip bg-slate-50 border-t border-b border-slate-100">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12 reveal">
                <span class="text-xs font-bold text-red-600 tracking-widest uppercase">Arah &amp; Tujuan</span>
                <h2 class="font-display text-3xl md:text-4xl text-blue-950 mt-2">Visi &amp; Misi</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Visi Card Putih Bersih -->
                <div class="reveal bg-white shadow-sm border border-slate-200/80 rounded-2xl p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-eye text-white"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold text-blue-900">Visi</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-base">
                        Menjadi pusat pendidikan Islam terkemuka yang melahirkan generasi <em
                            class="text-red-600 not-italic font-bold">berilmu, berakhlak mulia,</em>
                        dan mampu menjawab tantangan zaman dengan tetap berpegang teguh pada nilai-nilai Al-Qur'an dan
                        As-Sunnah.
                    </p>
                </div>

                <!-- Misi Card Putih Bersih -->
                <div class="reveal bg-white shadow-sm border border-slate-200/80 rounded-2xl p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-bullseye text-white"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold text-blue-900">Misi</h3>
                    </div>
                    <ul class="space-y-3">
                        @php
                            $misi = [
                                'Menyelenggarakan pendidikan Islam yang komprehensif dan berkualitas tinggi',
                                'Mengintegrasikan ilmu agama dengan ilmu pengetahuan modern',
                                'Membentuk karakter santri yang mandiri, disiplin, dan berakhlakul karimah',
                                'Mengembangkan keterampilan digital dan entrepreneurship berbasis nilai Islam',
                            ];
                        @endphp
                        @foreach ($misi as $i => $m)
                            <li class="flex items-start gap-3 text-gray-600 text-sm leading-relaxed">
                                <span
                                    class="mt-1 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center shrink-0 text-xs text-blue-700 font-bold">{{ $i + 1 }}</span>
                                {{ $m }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── NILAI-NILAI ─────────────────────── --}}
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12 reveal">
                <span class="text-xs font-bold text-blue-600 tracking-widest uppercase">Pilar Kami</span>
                <h2 class="font-display text-3xl md:text-4xl text-blue-900 mt-2">Nilai-Nilai Pesantren</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @php
                    $values = [
                        [
                            'icon' => 'fa-quran',
                            'title' => 'Qur\'ani',
                            'desc' => 'Setiap aspek kehidupan berpijak pada Al-Qur\'an dan As-Sunnah',
                        ],
                        [
                            'icon' => 'fa-handshake',
                            'title' => 'Ukhuwah',
                            'desc' => 'Membangun persaudaraan yang tulus antar sesama santri dan masyarakat',
                        ],
                        [
                            'icon' => 'fa-brain',
                            'title' => 'Ilmu',
                            'desc' => 'Menuntut ilmu adalah kewajiban yang tidak mengenal batas usia',
                        ],
                        [
                            'icon' => 'fa-heart',
                            'title' => 'Akhlak',
                            'desc' => 'Karakter mulia adalah pondasi utama seorang Muslim sejati',
                        ],
                        [
                            'icon' => 'fa-globe',
                            'title' => 'Global',
                            'desc' => 'Berwawasan internasional, bersaing di kancah dunia',
                        ],
                        [
                            'icon' => 'fa-lightbulb',
                            'title' => 'Inovasi',
                            'desc' => 'Mengadopsi teknologi terkini untuk kemajuan umat',
                        ],
                    ];
                @endphp

                @foreach ($values as $v)
                    <div
                        class="reveal group border border-slate-100 rounded-2xl p-6 hover:border-blue-200 hover:shadow-md transition-all duration-300 cursor-default">
                        <div
                            class="w-12 h-12 bg-blue-50 group-hover:bg-blue-100 rounded-xl flex items-center justify-center mb-4 transition-colors">
                            <i class="fas {{ $v['icon'] }} text-blue-600 text-xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-blue-900 text-lg mb-2">{{ $v['title'] }}</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $v['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─────────────────────── SEJARAH / TIMELINE ─────────────────────── --}}
    <section class="py-16 px-4 bg-slate-50">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-14 reveal">
                <span class="text-xs font-bold text-red-600 tracking-widest uppercase">Perjalanan Kami</span>
                <h2 class="font-display text-3xl md:text-4xl text-blue-900 mt-2">Sejarah Singkat</h2>
            </div>

            <div class="relative">
                <!-- Garis tengah bertema gradasi Biru ke Merah (Diatur di bagian <style>) -->
                <div class="hidden md:block timeline-line"></div>

                <div class="space-y-10">
                    @php
                    $timeline = [
                    ['year' => '1998', 'side' => 'left', 'title' => 'Berdiri', 'desc' => 'Daar Al-Ilmi EMIISc didirikan
                    oleh KH. Ahmad Fauzi dengan 30 santri perdana di atas lahan wakaf seluas 500 m².'],
                    ['year' => '2003', 'side' => 'right', 'title' => 'Berkembang', 'desc' => 'Pembangunan gedung sekolah
                    formal MTs Daar Al-Ilmi EMIISc dan asrama putra-putri dengan kapasitas 200 santri.'],
                    ['year' => '2010', 'side' => 'left', 'title' => 'Modernisasi', 'desc' => 'Integrasi kurikulum
                    teknologi informasi dan program Islamic Technopreneur pertama di Jakarta Timur.'],
                    ['year' => '2016', 'side' => 'right', 'title' => 'Akreditasi A', 'desc' => 'Meraih akreditasi A dari
                    BAN-S/M untuk seluruh jenjang pendidikan formal yang dikelola pesantren.'],
                    ['year' => '2020', 'side' => 'left', 'title' => 'Digital Pesantren', 'desc' => 'Peluncuran platform
                    pembelajaran daring Daar Al-Ilmi EMIISc Learning System, melayani lebih dari 800 santri.'],
                    ['year' => '2024', 'side' => 'right', 'title' => 'Menuju 1.200 Santri', 'desc' => 'Ekspansi program
                    tahfidz intensif dan kelas internasional serta kemitraan dengan universitas di Timur Tengah.'],
                    ];
                    @endphp

                    @foreach ($timeline as $t)
                    <div
                        class="reveal flex items-start gap-6 @if ($t['side'] === 'right') md:flex-row-reverse @endif">
                        <!-- Konten -->
                        <div class="flex-1 @if ($t['side'] === 'right') md:text-right @endif">
                            <div
                                class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 @if ($t['side'] === 'right') md:ml-8 @else md:mr-8 @endif">
                                <span
                                    class="inline-block bg-blue-700 text-white text-xs font-bold px-3 py-1 rounded-full mb-3">{{ $t['year'] }}</span>
                                <h4 class="font-display font-bold text-blue-900 text-lg mb-2">
                                    {{ $t['title'] }}</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">{{ $t['desc'] }}</p>
                            </div>
                        </div>
                        <!-- Dot penanda diubah ke warna Aksen Merah -->
                        <div
                            class="hidden md:flex w-4 h-4 bg-red-600 border-4 border-white rounded-full shadow-md shrink-0 mt-8 z-10">
                        </div>
                        <div class="hidden md:block flex-1"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── TIM PENGASUH ─────────────────────── --}}
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12 reveal">
                <span class="text-xs font-bold text-blue-600 tracking-widest uppercase">Para Pengasuh</span>
                <h2 class="font-display text-3xl md:text-4xl text-blue-900 mt-2">Pimpinan &amp; Pengasuh</h2>
                <p class="text-gray-500 mt-3 max-w-xl mx-auto text-sm">Dipimpin oleh para ulama dan akademisi
                    berpengalaman yang berdedikasi untuk kemajuan umat.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                $team = [
                ['nama' => 'KH. Ahmad Fauzi, M.A.', 'jabatan' => 'Pengasuh Utama', 'icon' => 'fa-star'],
                ['nama' => 'Ustadz Hasan Basri, S.Pd.', 'jabatan' => 'Kepala Sekolah MTs', 'icon' =>
                'fa-graduation-cap'],
                ['nama' => 'Ustadz Iqbal Rahman, S.T.', 'jabatan' => 'Direktur IT Pesantren', 'icon' => 'fa-laptop'],
                ['nama' => 'Ustadzah Siti Aminah, Lc.', 'jabatan' => 'Kepala Asrama Putri', 'icon' => 'fa-home'],
                ];
                @endphp

                @foreach ($team as $t)
                <div class="reveal text-center group">
                    <!-- Bingkai lingkaran diubah dari Hijau ke gradasi Biru Lembut, hover ke Merah -->
                    <div
                        class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-blue-50 to-slate-50 border-4 border-blue-100 group-hover:border-red-500 transition-colors flex items-center justify-center text-3xl text-blue-400">
                        <i class="fas {{ $t['icon'] }}"></i>
                    </div>
                    <h4 class="font-semibold text-blue-950 text-sm leading-snug mb-1">{{ $t['nama'] }}</h4>
                    <p class="text-xs text-gray-400">{{ $t['jabatan'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─────────────────────── CTA DAFTAR ─────────────────────── --}}
    <!-- Banner aksi diubah menjadi warna Biru Navy pekat -->
    <section class="py-16 px-4 bg-gradient-to-r from-blue-900 to-indigo-900">
        <div class="container mx-auto max-w-3xl text-center reveal">
            <h2 class="font-display text-3xl md:text-4xl text-white mb-4">Bergabung Bersama Kami</h2>
            <p class="text-blue-100 mb-8 leading-relaxed">Daftarkan putra-putri Anda sekarang dan jadikan Daar Al-Ilmi
                EMIISc
                asrama rumah kedua mereka dalam menuntut ilmu.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <!-- Tombol aksi utama diubah menjadi Merah Terang mencolok -->
                <a href="{{ url('/daftar') }}"
                    class="bg-red-600 hover:bg-red-500 text-white font-bold px-8 py-3.5 rounded-lg transition-colors text-sm shadow-lg shadow-red-900/30">
                    <i class="fas fa-pen-to-square mr-2"></i>Daftar Sekarang
                </a>
                <a href="https://wa.me/6285883037990" target="_blank"
                    class="bg-white/15 hover:bg-white/25 text-white border border-white/30 font-semibold px-8 py-3.5 rounded-lg transition-colors text-sm">
                    <i class="fab fa-whatsapp mr-2"></i>Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <footer class="bg-white border-t border-gray-200 pt-12 pb-6 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
                <!-- Kolom 1 -->
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('logo.png') }}" alt="PKBM Logo" class="w-14 h-14 object-contain">
                    </div>
                    <div class="flex flex-col gap-3 text-sm text-gray-700">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-phone text-gray-600 text-sm"></i>
                            <span>085883037990</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i class="fas fa-map-marked-alt text-gray-600 text-sm mt-0.5"></i>
                            <span>Jl. Condet Raya Kav. Lingkungan 7 No. 27 Jakarta Timur</span>
                        </div>
                    </div>
                    <!-- Sosial Media Hover diubah ke Biru -->
                    <div class="flex items-center gap-2 mt-2">
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors"><i
                                class="fab fa-facebook-f text-sm"></i></a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors"><i
                                class="fab fa-twitter text-sm"></i></a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors"><i
                                class="fab fa-instagram text-sm"></i></a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors"><i
                                class="fab fa-youtube text-sm"></i></a>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="flex flex-col justify-start pt-1">
                    <div class="flex">
                        <input type="text" placeholder="Pencarian Berita ..."
                            class="w-full border border-gray-300 px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:border-blue-500">
                        <button class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-2.5 transition-colors">
                            <i class="fas fa-search text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="flex flex-col gap-3">
                    <h5 class="text-base font-semibold text-gray-800 pb-2 border-b border-gray-300">Useful Link</h5>
                    <a href="#" class="text-sm text-gray-700 hover:text-blue-600 transition-colors">Hubungi
                        Kami</a>
                    <a href="#" class="text-sm text-gray-700 hover:text-blue-600 transition-colors">Index
                        Berita</a>
                    <a href="#" class="text-sm text-gray-700 hover:text-blue-600 transition-colors">Konsultasi
                        Online</a>
                </div>

                <!-- Kolom 4 -->
                <div class="flex flex-col gap-3">
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-blue-50 hover:text-blue-600 transition-colors">Teknologi</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-blue-50 hover:text-blue-600 transition-colors">Metropolitan</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-blue-50 hover:text-blue-600 transition-colors">Nasional</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-blue-50 hover:text-blue-600 transition-colors">Kesehatan</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-4 py-1.5 rounded hover:bg-blue-50 hover:text-blue-600 transition-colors">Islamic
                            Technopreneur</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-5 flex justify-end">
                <p class="text-sm text-gray-500">Copyright &copy; PKBMRI.sch.id. 2024</p>
            </div>
        </div>
    </footer>

    {{-- ─────────────────────── SCRIPTS ─────────────────────── --}}
    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                const t = document.querySelector(a.getAttribute('href'));
                if (t) {
                    t.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                document.getElementById('mobileMenu').classList.add('hidden');
            });
        });

        // Navbar shadow on scroll
        window.addEventListener('scroll', () => {
            document.getElementById('navbar').classList.toggle('shadow-xl', window.scrollY > 50);
        });

        // Reveal on scroll
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.12
        });

        document.querySelectorAll('.reveal').forEach((el, i) => {
            el.style.transitionDelay = (i % 4) * 0.1 + 's';
            observer.observe(el);
        });
    </script>

</body>

</html>


