@extends('layouts.app')

@section('title', 'Layanan - PKBM Rekan Indonesia | EMIISc Boarding Daar Al-Ilmi')

    @include('layouts.navbar')

    {{-- ─────────────────────── HERO BANNER SECTION ─────────────────────── --}}
    <section class="relative pt-20 overflow-hidden">
        <!-- Banner Background menggunakan tema gradasi Biru Navy gelap profesional -->
        <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 min-h-[480px] flex items-center relative">
            <div class="absolute top-0 right-0 w-80 h-80 bg-blue-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-600/10 rounded-full blur-2xl"></div>

            <!-- Pola Ornamen Dekoratif Garis Merah Aksen -->
            <div class="absolute bottom-0 right-0 left-0 h-1.5 bg-gradient-to-r from-red-600 to-red-500"></div>

            <div class="container mx-auto px-6 py-16 relative z-10 text-center lg:text-left">
                <div class="max-w-3xl">
                    <div class="text-xs md:text-sm font-bold text-red-400 tracking-widest uppercase mb-2">
                        PKBM Rekan Indonesia
                    </div>
                    <span class="block text-sm text-blue-200 font-medium mb-4 italic tracking-wide">بِسْمِ اللهِ الرَّحْمٰنِ
                        الرَّحِيْمِ</span>
                    <h1 class="font-['Playfair_Display'] text-4xl md:text-5xl text-white font-bold leading-tight mb-4">
                        Layanan Pendidikan<br>
                        <span class="text-red-500">Non Formal</span>
                    </h1>
                    <p class="text-blue-100 text-sm md:text-base leading-relaxed max-w-xl mb-8 font-sans">
                        Memadukan pendidikan Agama Islam, Teknologi, dan Kewirausahaan dalam satu ekosistem pembelajaran
                        yang terarah dan bermakna.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <!-- Tombol Pendaftaran Merah Aksen -->
                        <a href="{{ url('/daftar') }}"
                            class="inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-500 text-white text-sm font-bold px-6 py-3.5 rounded-lg transition-all shadow-lg shadow-red-900/30">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            Daftar Sekarang
                        </a>
                        <!-- Tombol Info -->
                        <a href="#layanan"
                            class="inline-flex items-center justify-center bg-white/15 hover:bg-white/25 text-white border border-white/20 text-sm font-semibold px-6 py-3.5 rounded-lg transition-colors">
                            Lihat Layanan Kami &darr;
                        </a>
                    </div>
                </div>

                <!-- Banner Mini Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 pt-8 border-t border-white/10 text-left">
                    <div class="border-l-2 border-red-600 pl-3">
                        <div class="text-xl md:text-2xl font-bold text-white font-['Playfair_Display']">A</div>
                        <div class="text-[11px] text-blue-200">Akreditasi BAN-PNF</div>
                    </div>
                    <div class="border-l-2 border-blue-500 pl-3">
                        <div class="text-xl md:text-2xl font-bold text-white font-['Playfair_Display']">3+</div>
                        <div class="text-[11px] text-blue-200">Program Kejar Paket</div>
                    </div>
                    <div class="border-l-2 border-blue-500 pl-3">
                        <div class="text-xl md:text-2xl font-bold text-white font-['Playfair_Display']">4</div>
                        <div class="text-[11px] text-blue-200">Jenis Kelas Tersedia</div>
                    </div>
                    <div class="border-l-2 border-red-600 pl-3">
                        <div class="text-xl md:text-2xl font-bold text-white font-['Playfair_Display']">&infin;</div>
                        <div class="text-[11px] text-blue-200">Potensi Santri</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-divider -mt-1">
            <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-10">
                <path d="M0,20 C360,40 1080,0 1440,20 L1440,40 L0,40 Z" fill="#ffffff" />
            </svg>
        </div>
    </section>

    {{-- ─────────────────────── AKREDITASI SECTION (DOMINAN PUTIH) ─────────────────────── --}}
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="grid md:grid-cols-12 gap-8 items-center">

                <!-- Badge Akreditasi Bulat Pola Resmi -->
                <div class="md:col-span-4 flex justify-center">
                    <div
                        class="relative w-48 h-48 rounded-full border-4 border-dashed border-blue-600 p-2 flex items-center justify-center bg-slate-50 animate-[spin_120s_linear_infinite]">
                        <div
                            class="w-full h-full rounded-full bg-blue-900 flex flex-col items-center justify-center text-white text-center p-4 shadow-xl">
                            <span class="text-[10px] font-bold tracking-widest text-blue-200 uppercase">BAN-PNF</span>
                            <span class="font-['Playfair_Display'] text-5xl font-extrabold text-white my-0.5">A</span>
                            <span class="text-[11px] font-semibold text-red-400 tracking-wider">TERAKREDITASI</span>
                            <div class="flex gap-0.5 text-xs text-amber-400 mt-1">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konten Teks Institusi -->
                <div class="md:col-span-8">
                    <h2 class="font-['Playfair_Display'] text-2xl md:text-3xl font-bold text-blue-950 mb-3 leading-tight">
                        BUAT SUKSES <br>
                        <span class="text-red-600">JADI NYATA</span>
                    </h2>
                    <div class="w-16 h-1 bg-red-600 mb-5"></div>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed mb-4">
                        PKBM Rekan Indonesia adalah lembaga pendidikan non formal dengan konsep <strong>"Islamic
                            Technopreneur"</strong> yang memadukan pendidikan agama Islam, teknologi dan entrepreneur
                        sebagai dasar pendidikan.
                    </p>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed mb-5">
                        Kami didukung oleh SDM yang profesional di bidang pendidikan agama, teknologi, dan entrepreneur.
                        Dengan dukungan SDM tersebut PKBM Rekan Indonesia dapat memberikan kontribusi nyata bagi pendidikan
                        kesetaraan di Indonesia.
                    </p>
                    <div
                        class="bg-blue-50 border-l-4 border-blue-900 rounded-r-xl p-4 text-xs md:text-sm text-blue-950 font-medium">
                        Bagian dari ekosistem pendidikan <strong>EMIISc Boarding School Daar Al-Ilmi</strong> — mencetak
                        generasi yang unggul dalam iman, ilmu, dan amal.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── LAYANAN PROGRAM GRID (DOMINAN PUTIH) ─────────────────────── --}}
    <section class="py-16 px-4 bg-slate-50 border-t border-b border-slate-200/60" id="layanan">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <span class="text-xs font-bold text-red-600 tracking-widest uppercase">Program Kesetaraan</span>
                <h2 class="font-['Playfair_Display'] text-2xl md:text-3xl text-blue-900 font-bold mt-1">Layanan Utama Kami
                </h2>
                <p class="text-xs md:text-sm text-gray-500 max-w-xl mx-auto mt-2">Program Kejar Paket yang tersedia untuk
                    membantu santri meraih ijazah resmi setara formal dengan kualitas akademik asrama yang terjamin.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Kejar Paket A -->
                <div
                    class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:border-blue-200 transition-all group">
                    <div>
                        <div
                            class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:bg-blue-900 group-hover:text-white transition-colors">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Program
                            Kejar</span>
                        <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950 mb-0.5">Paket A</h3>
                        <span
                            class="text-xs text-red-600 font-medium bg-red-50 px-2.5 py-0.5 rounded-full inline-block mb-4">Setara
                            SD / MI</span>
                        <p class="text-xs text-gray-500 leading-relaxed mb-6">
                            Program pendidikan kesetaraan tingkat dasar yang memberikan kesempatan belajar bagi warga
                            belajar yang belum menyelesaikan pendidikan dasar SD.
                        </p>
                        <ul class="space-y-2.5 border-t border-gray-100 pt-4 mb-6 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Kurikulum Merdeka
                                Belajar</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Pembelajaran
                                Berbasis Al-Qur'an</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Ijazah Resmi
                                Setara SD / MI</li>
                        </ul>
                    </div>
                    <a href="{{ route('layanan.paketA') }}"
                        class="block w-full text-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2.5 rounded-lg text-xs transition-colors">
                        Pelajari Paket A &rarr;
                    </a>
                </div>

                <!-- Kejar Paket B -->
                <div
                    class="bg-white border border-blue-200 rounded-2xl p-6 shadow-sm flex flex-col justify-between relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 bg-red-600 text-white text-[9px] font-extrabold px-3 py-1 rounded-bl-lg tracking-widest uppercase">
                        Populer</div>
                    <div>
                        <div
                            class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:bg-blue-900 group-hover:text-white transition-colors">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Program
                            Kejar</span>
                        <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950 mb-0.5">Paket B</h3>
                        <span
                            class="text-xs text-red-600 font-medium bg-red-50 px-2.5 py-0.5 rounded-full inline-block mb-4">Setara
                            SMP / MTs</span>
                        <p class="text-xs text-gray-500 leading-relaxed mb-6">
                            Program kesetaraan tingkat menengah pertama dengan integrasi nilai karakter Islam asrama dan
                            keterampilan teknologi dasar digital.
                        </p>
                        <ul class="space-y-2.5 border-t border-gray-100 pt-4 mb-6 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Kurikulum
                                Kesetaraan Modern</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Teknologi &
                                Digital IT Skill</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Ijazah Resmi
                                Setara SMP</li>
                        </ul>
                    </div>
                    <a href="{{ route('layanan.paketB') }}"
                        class="block w-full text-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2.5 rounded-lg text-xs transition-colors">
                        Pelajari Paket B &rarr;
                    </a>
                </div>

                <!-- Kejar Paket C -->
                <div
                    class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:border-blue-200 transition-all group">
                    <div>
                        <div
                            class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:bg-blue-900 group-hover:text-white transition-colors">
                            <i class="fas fa-award"></i>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Program
                            Kejar</span>
                        <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950 mb-0.5">Paket C</h3>
                        <span
                            class="text-xs text-red-600 font-medium bg-red-50 px-2.5 py-0.5 rounded-full inline-block mb-4">Setara
                            SMA / MA</span>
                        <p class="text-xs text-gray-500 leading-relaxed mb-6">
                            Kesetaraan jenjang menengah atas dengan akselerasi fokus pada kewirausahaan praktis Islam serta
                            persiapan UTBK PTN / dunia kerja.
                        </p>
                        <ul class="space-y-2.5 border-t border-gray-100 pt-4 mb-6 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i>
                                Entrepreneurship Practical Training</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Bimbingan UTBK
                                & Karir Sukses</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-blue-600"></i> Ijazah Resmi
                                Setara SMA</li>
                        </ul>
                    </div>
                    <a href="{{ route('layanan.paketC') }}"
                        class="block w-full text-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2.5 rounded-lg text-xs transition-colors">
                        Pelajari Paket C &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── CLASS & GROUP SECTION (DOMINAN PUTIH) ─────────────────────── --}}
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <span class="text-xs font-bold text-blue-600 tracking-widest uppercase">Metode Pembelajaran</span>
                <h2 class="font-['Playfair_Display'] text-2xl md:text-3xl text-blue-900 font-bold mt-1">Class & Group
                    Pilihan</h2>
                <p class="text-xs text-gray-500 mt-2">Sistem kelas fleksibel terstruktur demi mengakomodasi keunikan
                    kondisi belajar setiap santri.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="border border-slate-100 bg-slate-50/50 rounded-2xl p-5 hover:shadow-md transition-all">
                    <div class="text-xl mb-3">📖</div>
                    <h4 class="text-sm font-bold text-blue-950 mb-1">Reguler Class</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed mb-4">Kelas tatap muka reguler dengan jadwal
                        terstruktur di lingkungan pesantren. Sangat cocok untuk santri mukim.</p>
                    <span class="text-[9px] bg-blue-100 text-blue-800 font-bold px-2 py-0.5 rounded uppercase">Tatap
                        Muka</span>
                </div>
                <!-- Card 2 -->
                <div class="border border-slate-100 bg-slate-50/50 rounded-2xl p-5 hover:shadow-md transition-all">
                    <div class="text-xl mb-3">🏡</div>
                    <h4 class="text-sm font-bold text-blue-950 mb-1">Homeschooling Class</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed mb-4">Program belajar mandiri terarah dari rumah
                        dengan pendampingan modul digital interaktif berkala dari tutor.</p>
                    <span
                        class="text-[9px] bg-red-100 text-red-800 font-bold px-2 py-0.5 rounded uppercase">Fleksibel</span>
                </div>
                <!-- Card 3 -->
                <div class="border border-slate-100 bg-slate-50/50 rounded-2xl p-5 hover:shadow-md transition-all">
                    <div class="text-xl mb-3">🔄</div>
                    <h4 class="text-sm font-bold text-blue-950 mb-1">Semi Reguler Class</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed mb-4">Kombinasi sinkron antara pertemuan tatap muka
                        di asrama dan pembelajaran mandiri daring (Blended Learning).</p>
                    <span
                        class="text-[9px] bg-blue-100 text-blue-800 font-bold px-2 py-0.5 rounded uppercase">Hybrid</span>
                </div>
                <!-- Card 4 -->
                <div class="border border-slate-100 bg-slate-50/50 rounded-2xl p-5 hover:shadow-md transition-all">
                    <div class="text-xl mb-3">🚀</div>
                    <h4 class="text-sm font-bold text-blue-950 mb-1">Entrepreneur Training</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed mb-4">Program inkubasi penumbuhan minat bakat
                        wirausaha santri berbasis nilai syariah dan pemasaran teknologi.</p>
                    <span class="text-[9px] bg-red-100 text-red-800 font-bold px-2 py-0.5 rounded uppercase">Pengembangan
                        Diri</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ─────────────────────── FOOTER STRIP ─────────────────────── --}}
    <div
        class="bg-blue-950 text-white py-4 px-6 flex flex-col sm:flex-row justify-between items-center text-xs gap-3 border-t border-white/10">
        <div class="text-center sm:text-left">
            <strong>PKBM Rekan Indonesia</strong> — EMIISc Boarding Daar Al-Ilmi, Condet Jakarta Timur
        </div>
        <div class="text-blue-300">
            &copy; {{ date('Y') }} Hak Cipta Dilindungi
        </div>
    </div>
