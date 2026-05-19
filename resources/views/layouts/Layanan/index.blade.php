@extends('layouts.app')

@section('title', 'Layanan - PKBM Rekan Indonesia | EMIISc Boarding Daar Al-Ilmi')


@include('layouts.Layanan.style')
@include('layouts.navbar')

<section class="banner-section">
    <div class="banner-bg"></div>
    <div class="banner-pattern"></div>
    <div class="banner-ornament"></div>
    <div class="banner-garis-merah"></div>

    <div class="banner-content">
        <div class="banner-label">PKBM Rekan Indonesia</div>
        <span class="banner-arabic">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</span>
        <h1 class="banner-h1">
            Layanan
            <span class="aksen">Pendidikan<br>
                <span class="aksen-merah">Non Formal</span></span>
        </h1>
        <p class="banner-sub">
            Memadukan pendidikan Agama Islam, Teknologi, dan Kewirausahaan
            dalam satu ekosistem pembelajaran yang terarah dan bermakna.
        </p>
        <div class="banner-actions">
            <a href="#" class="btn-daftar">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                Daftar Sekarang
            </a>
            <a href="#layanan" class="btn-info">
                Lihat Layanan Kami →
            </a>
        </div>

        <div class="banner-stats">
            <div class="stat-item">
                <div class="stat-angka">A</div>
                <div class="stat-label">Akreditasi BAN-PNF</div>
            </div>
            <div class="stat-item">
                <div class="stat-angka">3+</div>
                <div class="stat-label">Program Kejar Paket</div>
            </div>
            <div class="stat-item">
                <div class="stat-angka">4</div>
                <div class="stat-label">Jenis Kelas Tersedia</div>
            </div>
            <div class="stat-item">
                <div class="stat-angka">∞</div>
                <div class="stat-label">Potensi Santri</div>
            </div>
        </div>
    </div>
</section>


{{-- ====================================================
     AKREDITASI SECTION
==================================================== --}}
<section class="akreditasi-section">
    <div class="akreditasi-inner">

        {{-- Badge Akreditasi --}}
        <div class="akreditasi-badge-wrap">
            <div class="akreditasi-lingkaran-luar">
                <div class="akreditasi-lingkaran-dalam">
                    <span class="akre-logo-text">BAN-PNF</span>
                    <span class="akre-grade">A</span>
                    <span class="akre-label">Akreditasi</span>
                    <div class="akre-bintang">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                </div>
                <div class="akreditasi-badge-stamp">Terakreditasi Resmi</div>
            </div>
        </div>

        {{-- Konten --}}
        <div class="akreditasi-konten">
            <h2 class="akre-tagline">
                <span class="biru">BUAT SUKSES</span><br>
                <span class="merah">JADI NYATA</span>
            </h2>
            <div class="akre-garis"></div>
            <p class="akre-paragraf">
                PKBM Rekan Indonesia adalah lembaga pendidikan non formal dengan konsep
                <strong>"Islamic Technopreneur"</strong> yang memadukan pendidikan agama Islam,
                teknologi dan entrepreneur sebagai dasar pendidikan.
            </p>
            <p class="akre-paragraf">
                PKBM Rekan Indonesia didukung oleh SDM yang profesional di bidang pendidikan agama,
                teknologi, dan entrepreneur. Dengan dukungan SDM tersebut PKBM Rekan Indonesia
                dapat memberikan kontribusi nyata bagi pendidikan Indonesia.
            </p>
            <div class="akre-highlight-box">
                <p>
                    Bagian dari ekosistem pendidikan <strong>EMIISc Boarding School Daar Al-Ilmi</strong> —
                    mencetak generasi yang unggul dalam iman, ilmu, dan amal.
                </p>
            </div>
        </div>

    </div>
</section>


{{-- ====================================================
     LAYANAN SECTION
==================================================== --}}
<section class="layanan-section" id="layanan">
    <div class="section-header">
        <div class="section-kecil">Program Pendidikan</div>
        <h2 class="section-judul">Layanan <span class="aksen">Kami</span></h2>
        <p class="section-deskripsi">Program Kejar Paket yang tersedia untuk membantu santri meraih ijazah setara formal
            dengan kualitas terjamin.</p>
    </div>

    <div class="layanan-grid">

        {{-- Kejar Paket A --}}
        <div class="layanan-card">
            <div class="layanan-card-header">
                <div class="layanan-icon-besar">📚</div>
                <div class="layanan-paket-label">Program Kejar</div>
                <div class="layanan-paket-nama">Paket A</div>
                <div class="layanan-paket-sub">Setara SD / MI</div>
            </div>
            <div class="layanan-card-body">
                <div class="layanan-level">
                    <span class="layanan-badge-kelas">Tingkat Dasar</span>
                </div>
                <p class="layanan-desc">
                    Program pendidikan kesetaraan tingkat dasar yang memberikan kesempatan belajar bagi warga yang belum
                    menyelesaikan pendidikan SD.
                </p>
                <ul class="layanan-fitur">
                    <li><span class="ceklis">✓</span> Kurikulum Merdeka Belajar</li>
                    <li><span class="ceklis">✓</span> Pembelajaran berbasis Al-Qur'an</li>
                    <li><span class="ceklis">✓</span> Ijazah Setara SD / MI</li>
                    <li><span class="ceklis">✓</span> Tentor Berpengalaman</li>
                </ul>
            </div>
            <a href="{{route('layanan.paketA')}}" class="btn-layanan">
                Pelajari Lebih Lanjut →
            </a>
        </div>

        {{-- Kejar Paket B --}}
        <div class="layanan-card">
            <div class="layanan-card-header">
                <div class="layanan-icon-besar">🎓</div>
                <div class="layanan-paket-label">Program Kejar</div>
                <div class="layanan-paket-nama">Paket B</div>
                <div class="layanan-paket-sub">Setara SMP / MTs</div>
            </div>
            <div class="layanan-card-body">
                <div class="layanan-level">
                    <span class="layanan-badge-kelas">Tingkat Menengah Pertama</span>
                </div>
                <p class="layanan-desc">
                    Program kesetaraan tingkat menengah pertama dengan integrasi nilai Islam dan keterampilan teknologi
                    dasar untuk santri pondok.
                </p>
                <ul class="layanan-fitur">
                    <li><span class="ceklis">✓</span> Kurikulum Merdeka Belajar</li>
                    <li><span class="ceklis">✓</span> Teknologi & Digital Skill</li>
                    <li><span class="ceklis">✓</span> Ijazah Setara SMP / MTs</li>
                    <li><span class="ceklis">✓</span> Program Mentoring Santri</li>
                </ul>
            </div>
            <a href="{{route('layanan.paketB')}}" class="btn-layanan">
                Pelajari Lebih Lanjut →
            </a>
        </div>

        {{-- Kejar Paket C --}}
        <div class="layanan-card">
            <div class="layanan-card-header">
                <div class="layanan-icon-besar">🏅</div>
                <div class="layanan-paket-label">Program Kejar</div>
                <div class="layanan-paket-nama">Paket C</div>
                <div class="layanan-paket-sub">Setara SMA / MA</div>
            </div>
            <div class="layanan-card-body">
                <div class="layanan-level">
                    <span class="layanan-badge-kelas">Tingkat Menengah Atas</span>
                </div>
                <p class="layanan-desc">
                    Program kesetaraan tertinggi dengan fokus pada kewirausahaan Islam dan persiapan santri memasuki
                    dunia kerja & perguruan tinggi.
                </p>
                <ul class="layanan-fitur">
                    <li><span class="ceklis">✓</span> Kurikulum Merdeka Belajar</li>
                    <li><span class="ceklis">✓</span> Entrepreneurship Training</li>
                    <li><span class="ceklis">✓</span> Ijazah Setara SMA / MA</li>
                    <li><span class="ceklis">✓</span> Persiapan UTBK / Kerja</li>
                </ul>
            </div>
            <a href="{{route('layanan.paketC')}}" class="btn-layanan">
                Pelajari Lebih Lanjut →
            </a>
        </div>

    </div>
</section>


{{-- ====================================================
     CLASS & GROUP SECTION
==================================================== --}}
<section class="class-section">
    <div class="section-header">
        <div class="section-kecil">Metode Pembelajaran</div>
        <h2 class="section-judul">Class & <span class="aksen">Group</span></h2>
        <p class="section-deskripsi">Pilih metode belajar yang paling sesuai dengan kebutuhan dan kondisi santri.</p>
    </div>

    <div class="class-grid">

        <div class="class-card">
            <div class="class-icon-wrap">📖</div>
            <div class="class-nama">Reguler Class</div>
            <p class="class-desc">
                Kelas tatap muka reguler dengan jadwal terstruktur di lingkungan pesantren. Cocok untuk santri mukim.
            </p>
            <span class="class-tag">Tatap Muka</span>
        </div>

        <div class="class-card">
            <div class="class-icon-wrap">🔀</div>
            <div class="class-nama">Home Schooling Class</div>
            <p class="class-desc">
                Program belajar mandiri di rumah dengan pendampingan tutor dan modul digital yang terstruktur.
            </p>
            <span class="class-tag">Fleksibel</span>
        </div>

        <div class="class-card">
            <div class="class-icon-wrap">🔀</div>
            <div class="class-nama">Semi Reguler Class</div>
            <p class="class-desc">
                Kombinasi tatap muka dan pembelajaran daring, memberikan fleksibilitas dengan tetap terstruktur.
            </p>
            <span class="class-tag">Hybrid</span>
        </div>

        <div class="class-card">
            <div class="class-icon-wrap">🚀</div>
            <div class="class-nama">Eskul & Entrepreneur Training</div>
            <p class="class-desc">
                Program pengembangan diri melalui ekstrakurikuler dan pelatihan wirausaha berbasis nilai Islam.
            </p>
            <span class="class-tag">Pengembangan Diri</span>
        </div>

    </div>
</section>


{{-- ====================================================
     NEWS SECTION
==================================================== --}}
<section class="news-section">
    <div class="news-bg-pattern"></div>
    <div class="news-inner">

        <div class="section-header">
            <div class="section-kecil">Informasi Terkini</div>
            <h2 class="section-judul">Berita & <span style="color:var(--emas-muda)">Pengumuman</span></h2>
            <p class="section-deskripsi">Update terbaru dari PKBM Rekan Indonesia & Pondok Pesantren EMIISc Boarding
                Daar Al-Ilmi.</p>
        </div>

        <div class="news-grid">

            {{-- Berita Utama --}}
            <div class="news-card-utama">
                <div class="news-img-placeholder-utama">
                    🏫
                    <div class="news-badge">Utama</div>
                </div>
                <div class="news-card-body-utama">
                    <div class="news-tanggal">15 Januari 2025</div>
                    <a href="#" class="news-judul-utama">
                        PKBM Rekan Indonesia Kembali Raih Akreditasi A dari BAN-PNF Tahun 2025
                    </a>
                    <p class="news-excerpt">
                        Lembaga pendidikan non formal PKBM Rekan Indonesia berhasil mempertahankan predikat
                        akreditasi A dari Badan Akreditasi Nasional Pendidikan Non Formal (BAN-PNF),
                        membuktikan komitmen dalam kualitas pendidikan Islamic Technopreneur...
                    </p>
                    <a href="#" class="news-baca">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>

            {{-- Berita Kecil 1 --}}
            <div class="news-card-kecil">
                <div class="news-thumb thumb-merah">📣</div>
                <div class="news-kecil-konten">
                    <div class="news-kecil-kat kat-merah">Pengumuman</div>
                    <a href="#" class="news-kecil-judul">
                        Pendaftaran Santri Baru Tahun Ajaran 2025/2026 Resmi Dibuka
                    </a>
                    <div class="news-kecil-tgl">10 Januari 2025</div>
                </div>
            </div>

            {{-- Berita Kecil 2 --}}
            <div class="news-card-kecil">
                <div class="news-thumb thumb-biru">💡</div>
                <div class="news-kecil-konten">
                    <div class="news-kecil-kat kat-biru">Program</div>
                    <a href="#" class="news-kecil-judul">
                        Pelatihan Entrepreneur Santri: Workshop Digital Marketing Batch 3
                    </a>
                    <div class="news-kecil-tgl">5 Januari 2025</div>
                </div>
            </div>

            {{-- Berita Kecil 3 --}}
            <div class="news-card-kecil">
                <div class="news-thumb thumb-hijau">🏆</div>
                <div class="news-kecil-konten">
                    <div class="news-kecil-kat kat-merah">Prestasi</div>
                    <a href="#" class="news-kecil-judul">
                        Santri EMIISc Juara 1 Lomba Robotika Tingkat Jawa Barat 2024
                    </a>
                    <div class="news-kecil-tgl">28 Desember 2024</div>
                </div>
            </div>

            {{-- Berita Kecil 4 --}}
            <div class="news-card-kecil">
                <div class="news-thumb thumb-ungu">📅</div>
                <div class="news-kecil-konten">
                    <div class="news-kecil-kat kat-biru">Kegiatan</div>
                    <a href="#" class="news-kecil-judul">
                        Haflah Akhirus Sanah 1446 H — Wisuda & Khataman Al-Qur'an
                    </a>
                    <div class="news-kecil-tgl">20 Desember 2024</div>
                </div>
            </div>

        </div>

        <div class="news-cta">
            <a href="#" class="btn-semua-berita">
                Lihat Semua Berita
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- Footer Strip --}}
<div class="footer-strip">
    <div class="footer-strip-nama">
        <strong>PKBM Rekan Indonesia</strong> — EMIISc Boarding Daar Al-Ilmi, Bogor
    </div>
    <div class="footer-strip-nama">
        © {{ date('Y') }} Hak Cipta Dilindungi
    </div>
</div>
