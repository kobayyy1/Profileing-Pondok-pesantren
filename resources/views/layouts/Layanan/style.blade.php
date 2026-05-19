<style>
    @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

    :root {
        --merah: #C0392B;
        --merah-tua: #922B21;
        --merah-muda: #E74C3C;
        --biru: #1A3A6B;
        --biru-tua: #0F2447;
        --biru-muda: #2E6DA4;
        --emas: #C9A84C;
        --emas-muda: #F0C040;
        --putih: #FAFAFA;
        --abu: #F4F4F4;
        --teks-gelap: #1A1A2E;
    }

    * { box-sizing: border-box; }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: var(--teks-gelap);
        background: var(--putih);
        margin: 0;
        overflow-x: hidden;
    }

    /* ===========================
       BANNER SECTION
    =========================== */
    .banner-section {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        background: var(--biru-tua);
    }

    .banner-bg {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse at 70% 50%, rgba(192,57,43,0.25) 0%, transparent 60%),
            radial-gradient(ellipse at 10% 80%, rgba(46,109,164,0.3) 0%, transparent 50%),
            linear-gradient(135deg, #0F2447 0%, #1A3A6B 50%, #0F2447 100%);
    }

    .banner-pattern {
        position: absolute;
        inset: 0;
        background-image:
            repeating-linear-gradient(
                45deg,
                transparent,
                transparent 40px,
                rgba(201,168,76,0.04) 40px,
                rgba(201,168,76,0.04) 41px
            ),
            repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 40px,
                rgba(201,168,76,0.04) 40px,
                rgba(201,168,76,0.04) 41px
            );
    }

    /* Ornamen kaligrafi dekoratif */
    .banner-ornament {
        position: absolute;
        right: -60px;
        top: 50%;
        transform: translateY(-50%);
        width: 520px;
        height: 520px;
        border: 2px solid rgba(201,168,76,0.15);
        border-radius: 50%;
        opacity: 0.6;
    }
    .banner-ornament::before {
        content: '';
        position: absolute;
        inset: 30px;
        border: 1px solid rgba(201,168,76,0.1);
        border-radius: 50%;
    }
    .banner-ornament::after {
        content: '';
        position: absolute;
        inset: 60px;
        border: 1px dashed rgba(201,168,76,0.08);
        border-radius: 50%;
    }

    .banner-garis-merah {
        position: absolute;
        left: 0;
        top: 0;
        width: 6px;
        height: 100%;
        background: linear-gradient(to bottom, var(--merah), var(--emas), var(--merah));
    }

    .banner-content {
        position: relative;
        z-index: 2;
        max-width: 1280px;
        margin: 0 auto;
        padding: 80px 48px;
        width: 100%;
    }

    .banner-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(201,168,76,0.15);
        border: 1px solid rgba(201,168,76,0.35);
        color: var(--emas-muda);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        padding: 8px 18px;
        border-radius: 2px;
        margin-bottom: 28px;
    }

    .banner-label::before {
        content: '';
        display: block;
        width: 6px;
        height: 6px;
        background: var(--emas-muda);
        border-radius: 50%;
    }

    .banner-arabic {
        font-family: 'Amiri', serif;
        font-size: clamp(1.4rem, 3vw, 2rem);
        color: rgba(201,168,76,0.7);
        margin-bottom: 12px;
        display: block;
    }

    .banner-h1 {
        font-size: clamp(2.4rem, 6vw, 4.5rem);
        font-weight: 800;
        line-height: 1.05;
        color: #fff;
        margin: 0 0 20px;
        letter-spacing: -0.02em;
    }

    .banner-h1 .aksen {
        color: var(--emas-muda);
        display: block;
    }

    .banner-h1 .aksen-merah {
        color: var(--merah-muda);
    }

    .banner-sub {
        font-size: clamp(0.95rem, 1.8vw, 1.15rem);
        color: rgba(255,255,255,0.6);
        max-width: 540px;
        line-height: 1.7;
        margin-bottom: 48px;
        font-weight: 300;
    }

    .banner-actions {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .btn-daftar {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, var(--merah) 0%, var(--merah-muda) 100%);
        color: #fff;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 0.04em;
        padding: 16px 36px;
        border-radius: 4px;
        text-decoration: none;
        box-shadow: 0 8px 32px rgba(192,57,43,0.45);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-daftar::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, transparent 60%);
    }

    .btn-daftar:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 40px rgba(192,57,43,0.55);
    }

    .btn-daftar svg { width: 18px; height: 18px; }

    .btn-info {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: rgba(255,255,255,0.7);
        font-size: 0.9rem;
        font-weight: 500;
        text-decoration: none;
        border-bottom: 1px solid rgba(255,255,255,0.25);
        padding-bottom: 2px;
        transition: all 0.3s;
    }

    .btn-info:hover {
        color: var(--emas-muda);
        border-color: var(--emas-muda);
    }

    .banner-stats {
        display: flex;
        gap: 48px;
        margin-top: 64px;
        padding-top: 40px;
        border-top: 1px solid rgba(255,255,255,0.08);
    }

    .stat-item { text-align: left; }

    .stat-angka {
        font-size: 2rem;
        font-weight: 800;
        color: var(--emas-muda);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.8rem;
        color: rgba(255,255,255,0.45);
        margin-top: 4px;
        letter-spacing: 0.05em;
    }

    /* ===========================
       AKREDITASI SECTION
    =========================== */
    .akreditasi-section {
        background: var(--putih);
        padding: 100px 48px;
        position: relative;
        overflow: hidden;
    }

    .akreditasi-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--merah), var(--emas), var(--biru));
    }

    .akreditasi-inner {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 380px 1fr;
        gap: 80px;
        align-items: center;
    }

    /* Badge Akreditasi */
    .akreditasi-badge-wrap {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .akreditasi-lingkaran-luar {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 3px solid var(--emas);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        background: linear-gradient(135deg, #fff 0%, #FEF9EE 100%);
        box-shadow:
            0 0 0 10px rgba(201,168,76,0.08),
            0 0 0 20px rgba(201,168,76,0.04),
            0 20px 60px rgba(0,0,0,0.1);
    }

    .akreditasi-lingkaran-dalam {
        width: 240px;
        height: 240px;
        border-radius: 50%;
        border: 1.5px dashed rgba(201,168,76,0.4);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 4px;
        padding: 24px;
    }

    .akre-logo-text {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: var(--biru);
        opacity: 0.7;
    }

    .akre-grade {
        font-size: 7rem;
        font-weight: 800;
        line-height: 1;
        color: var(--merah);
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .akre-label {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        color: var(--biru);
        text-transform: uppercase;
    }

    .akre-bintang {
        display: flex;
        gap: 4px;
        margin-top: 4px;
    }

    .akre-bintang span {
        color: var(--emas);
        font-size: 1rem;
    }

    .akreditasi-badge-stamp {
        position: absolute;
        bottom: -10px;
        right: -10px;
        background: var(--biru);
        color: #fff;
        font-size: 0.6rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        padding: 6px 14px;
        border-radius: 20px;
        text-transform: uppercase;
        box-shadow: 0 4px 12px rgba(26,58,107,0.4);
    }

    /* Teks konten */
    .akreditasi-konten {}

    .akre-tagline {
        font-size: clamp(1.6rem, 3.5vw, 2.6rem);
        font-weight: 800;
        line-height: 1.15;
        margin: 0 0 24px;
        color: var(--teks-gelap);
        letter-spacing: -0.02em;
    }

    .akre-tagline .biru { color: var(--biru); }
    .akre-tagline .merah { color: var(--merah); }

    .akre-garis {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, var(--merah), var(--emas));
        border-radius: 2px;
        margin-bottom: 28px;
    }

    .akre-paragraf {
        font-size: 0.95rem;
        line-height: 1.85;
        color: #555;
        margin-bottom: 20px;
    }

    .akre-highlight-box {
        background: linear-gradient(135deg, var(--biru-tua), var(--biru));
        color: #fff;
        border-radius: 8px;
        padding: 24px 28px;
        margin-top: 32px;
        border-left: 4px solid var(--emas);
    }

    .akre-highlight-box p {
        font-size: 0.9rem;
        line-height: 1.7;
        margin: 0;
        color: rgba(255,255,255,0.85);
    }

    .akre-highlight-box strong {
        color: var(--emas-muda);
    }

    /* ===========================
       LAYANAN SECTION
    =========================== */
    .layanan-section {
        background: var(--abu);
        padding: 100px 48px;
        position: relative;
    }

    .layanan-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 100%;
        background:
            radial-gradient(ellipse at 50% 0%, rgba(26,58,107,0.05) 0%, transparent 60%);
        pointer-events: none;
    }

    .section-header {
        text-align: center;
        margin-bottom: 64px;
    }

    .section-kecil {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        text-transform: uppercase;
        color: var(--merah);
        margin-bottom: 14px;
    }

    .section-kecil::before,
    .section-kecil::after {
        content: '';
        display: block;
        height: 1px;
        width: 32px;
        background: currentColor;
        opacity: 0.5;
    }

    .section-judul {
        font-size: clamp(1.8rem, 4vw, 3rem);
        font-weight: 800;
        line-height: 1.15;
        color: var(--teks-gelap);
        margin: 0 0 12px;
        letter-spacing: -0.02em;
    }

    .section-judul .aksen { color: var(--biru); }
    .section-deskripsi {
        font-size: 0.95rem;
        color: #777;
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .layanan-grid {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .layanan-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 24px rgba(0,0,0,0.07);
        transition: all 0.35s ease;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .layanan-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(0,0,0,0.14);
    }

    .layanan-card-header {
        padding: 36px 32px 28px;
        position: relative;
        overflow: hidden;
    }

    .layanan-card:nth-child(1) .layanan-card-header {
        background: linear-gradient(135deg, var(--biru-tua) 0%, var(--biru) 100%);
    }
    .layanan-card:nth-child(2) .layanan-card-header {
        background: linear-gradient(135deg, var(--merah-tua) 0%, var(--merah) 100%);
    }
    .layanan-card:nth-child(3) .layanan-card-header {
        background: linear-gradient(135deg, #1a5c2a 0%, #27ae60 100%);
    }

    .layanan-card-header::after {
        content: '';
        position: absolute;
        bottom: -20px;
        right: -20px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid rgba(255,255,255,0.1);
    }

    .layanan-paket-label {
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.6);
        margin-bottom: 8px;
    }

    .layanan-paket-nama {
        font-size: 1.9rem;
        font-weight: 800;
        color: #fff;
        line-height: 1;
        margin-bottom: 6px;
    }

    .layanan-paket-sub {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.75);
    }

    .layanan-icon-besar {
        position: absolute;
        top: 20px;
        right: 28px;
        font-size: 3rem;
        opacity: 0.25;
    }

    .layanan-card-body {
        padding: 28px 32px;
        flex: 1;
    }

    .layanan-level {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

    .layanan-badge-kelas {
        font-size: 0.7rem;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        letter-spacing: 0.05em;
    }

    .layanan-card:nth-child(1) .layanan-badge-kelas { background: rgba(26,58,107,0.1); color: var(--biru); }
    .layanan-card:nth-child(2) .layanan-badge-kelas { background: rgba(192,57,43,0.1); color: var(--merah); }
    .layanan-card:nth-child(3) .layanan-badge-kelas { background: rgba(39,174,96,0.1); color: #27ae60; }

    .layanan-desc {
        font-size: 0.88rem;
        color: #666;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .layanan-fitur {
        list-style: none;
        padding: 0;
        margin: 0 0 28px;
    }

    .layanan-fitur li {
        font-size: 0.82rem;
        color: #555;
        padding: 6px 0;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #f0f0f0;
    }

    .layanan-fitur li:last-child { border-bottom: none; }

    .ceklis {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 0.65rem;
        color: #fff;
    }

    .layanan-card:nth-child(1) .ceklis { background: var(--biru); }
    .layanan-card:nth-child(2) .ceklis { background: var(--merah); }
    .layanan-card:nth-child(3) .ceklis { background: #27ae60; }

    .btn-layanan {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 14px 24px;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s;
        letter-spacing: 0.04em;
        margin: 0 32px 28px;
    }

    .layanan-card:nth-child(1) .btn-layanan {
        background: var(--biru);
        color: #fff;
        box-shadow: 0 6px 20px rgba(26,58,107,0.3);
    }
    .layanan-card:nth-child(2) .btn-layanan {
        background: var(--merah);
        color: #fff;
        box-shadow: 0 6px 20px rgba(192,57,43,0.3);
    }
    .layanan-card:nth-child(3) .btn-layanan {
        background: #27ae60;
        color: #fff;
        box-shadow: 0 6px 20px rgba(39,174,96,0.3);
    }

    .btn-layanan:hover {
        filter: brightness(1.1);
        transform: translateY(-2px);
    }

    /* ===========================
       CLASS & GROUP SECTION
    =========================== */
    .class-section {
        background: var(--putih);
        padding: 100px 48px;
        position: relative;
        overflow: hidden;
    }

    .class-section::after {
        content: '';
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--biru), var(--emas), var(--merah));
    }

    .class-grid {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .class-card {
        background: var(--putih);
        border: 1.5px solid #E8E8E8;
        border-radius: 12px;
        padding: 36px 24px;
        text-align: center;
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .class-card::before {
        content: '';
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 3px;
        background: var(--garis-warna, var(--biru));
        transform: scaleX(0);
        transition: transform 0.35s ease;
        transform-origin: center;
    }

    .class-card:hover {
        border-color: transparent;
        box-shadow: 0 12px 40px rgba(0,0,0,0.1);
        transform: translateY(-6px);
    }

    .class-card:hover::before {
        transform: scaleX(1);
    }

    .class-card:nth-child(1) { --garis-warna: var(--biru); }
    .class-card:nth-child(2) { --garis-warna: var(--merah); }
    .class-card:nth-child(3) { --garis-warna: #8e44ad; }
    .class-card:nth-child(4) { --garis-warna: #16a085; }

    .class-icon-wrap {
        width: 72px;
        height: 72px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
    }

    .class-card:nth-child(1) .class-icon-wrap { background: rgba(26,58,107,0.1); }
    .class-card:nth-child(2) .class-icon-wrap { background: rgba(192,57,43,0.1); }
    .class-card:nth-child(3) .class-icon-wrap { background: rgba(142,68,173,0.1); }
    .class-card:nth-child(4) .class-icon-wrap { background: rgba(22,160,133,0.1); }

    .class-nama {
        font-size: 1rem;
        font-weight: 700;
        color: var(--teks-gelap);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .class-desc {
        font-size: 0.82rem;
        color: #888;
        line-height: 1.65;
    }

    .class-tag {
        display: inline-block;
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 20px;
        margin-top: 14px;
        color: #fff;
    }

    .class-card:nth-child(1) .class-tag { background: var(--biru); }
    .class-card:nth-child(2) .class-tag { background: var(--merah); }
    .class-card:nth-child(3) .class-tag { background: #8e44ad; }
    .class-card:nth-child(4) .class-tag { background: #16a085; }

    /* ===========================
       NEWS SECTION
    =========================== */
    .news-section {
        background: var(--biru-tua);
        padding: 100px 48px;
        position: relative;
        overflow: hidden;
    }

    .news-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--merah), var(--emas), var(--biru-muda));
    }

    .news-bg-pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 20% 50%, rgba(192,57,43,0.12) 0%, transparent 40%),
            radial-gradient(circle at 80% 20%, rgba(46,109,164,0.15) 0%, transparent 40%);
        pointer-events: none;
    }

    .news-inner {
        max-width: 1280px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .news-section .section-judul { color: #fff; }
    .news-section .section-deskripsi { color: rgba(255,255,255,0.5); }
    .news-section .section-kecil { color: var(--emas-muda); }
    .news-section .section-kecil::before,
    .news-section .section-kecil::after { background: var(--emas-muda); }

    .news-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr;
        gap: 24px;
        margin-top: 0;
    }

    /* Berita utama */
    .news-card-utama {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s;
        grid-row: span 2;
        display: flex;
        flex-direction: column;
    }

    .news-card-utama:hover {
        background: rgba(255,255,255,0.08);
        transform: translateY(-4px);
    }

    .news-img-placeholder-utama {
        height: 240px;
        background: linear-gradient(135deg, var(--merah-tua), var(--merah));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }

    .news-img-placeholder-utama::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            repeating-linear-gradient(45deg, transparent, transparent 20px, rgba(255,255,255,0.03) 20px, rgba(255,255,255,0.03) 21px);
    }

    .news-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: var(--merah);
        color: #fff;
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 5px 12px;
        border-radius: 3px;
    }

    .news-card-body-utama {
        padding: 28px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .news-tanggal {
        font-size: 0.72rem;
        color: rgba(255,255,255,0.4);
        letter-spacing: 0.08em;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .news-tanggal::before {
        content: '';
        display: block;
        width: 20px;
        height: 1px;
        background: var(--emas);
        opacity: 0.6;
    }

    .news-judul-utama {
        font-size: 1.15rem;
        font-weight: 700;
        color: #fff;
        line-height: 1.4;
        margin-bottom: 12px;
        text-decoration: none;
        display: block;
        transition: color 0.2s;
    }

    .news-judul-utama:hover { color: var(--emas-muda); }

    .news-excerpt {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.5);
        line-height: 1.7;
        flex: 1;
    }

    .news-baca {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        color: var(--emas-muda);
        text-decoration: none;
        transition: gap 0.2s;
    }

    .news-baca:hover { gap: 10px; }

    /* Berita kecil */
    .news-card-kecil {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 10px;
        padding: 24px;
        display: flex;
        gap: 18px;
        align-items: flex-start;
        transition: all 0.3s;
    }

    .news-card-kecil:hover {
        background: rgba(255,255,255,0.08);
        transform: translateX(4px);
    }

    .news-thumb {
        width: 70px;
        height: 70px;
        border-radius: 8px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }

    .thumb-merah { background: linear-gradient(135deg, var(--merah-tua), var(--merah)); }
    .thumb-biru { background: linear-gradient(135deg, var(--biru-tua), var(--biru-muda)); }
    .thumb-hijau { background: linear-gradient(135deg, #1a5c2a, #27ae60); }
    .thumb-ungu { background: linear-gradient(135deg, #4a148c, #8e44ad); }

    .news-kecil-konten {}

    .news-kecil-kat {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .kat-merah { color: var(--merah-muda); }
    .kat-biru { color: #5dade2; }

    .news-kecil-judul {
        font-size: 0.88rem;
        font-weight: 600;
        color: rgba(255,255,255,0.85);
        line-height: 1.4;
        text-decoration: none;
        display: block;
        margin-bottom: 6px;
        transition: color 0.2s;
    }

    .news-kecil-judul:hover { color: var(--emas-muda); }

    .news-kecil-tgl {
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
    }

    .news-cta {
        text-align: center;
        margin-top: 48px;
    }

    .btn-semua-berita {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        border: 1.5px solid rgba(255,255,255,0.2);
        color: rgba(255,255,255,0.8);
        padding: 14px 36px;
        border-radius: 4px;
        font-size: 0.88rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
    }

    .btn-semua-berita:hover {
        background: rgba(255,255,255,0.07);
        border-color: var(--emas);
        color: var(--emas-muda);
    }

    /* ===========================
       FOOTER STRIP
    =========================== */
    .footer-strip {
        background: var(--teks-gelap);
        padding: 20px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .footer-strip-nama {
        font-size: 0.82rem;
        color: rgba(255,255,255,0.4);
    }

    .footer-strip-nama strong { color: rgba(255,255,255,0.7); }

    /* ===========================
       RESPONSIVE
    =========================== */
    @media (max-width: 1024px) {
        .akreditasi-inner { grid-template-columns: 1fr; text-align: center; }
        .akreditasi-badge-wrap { justify-content: center; margin-bottom: 40px; }
        .akre-garis { margin: 0 auto 28px; }
        .class-grid { grid-template-columns: repeat(2, 1fr); }
        .news-grid { grid-template-columns: 1fr 1fr; }
        .news-card-utama { grid-row: auto; grid-column: span 2; }
    }

    @media (max-width: 768px) {
        .banner-content, .akreditasi-section, .layanan-section, .class-section, .news-section { padding: 60px 24px; }
        .layanan-grid { grid-template-columns: 1fr; }
        .class-grid { grid-template-columns: 1fr 1fr; }
        .news-grid { grid-template-columns: 1fr; }
        .news-card-utama { grid-column: auto; }
        .banner-stats { flex-wrap: wrap; gap: 28px; }
        .banner-ornament { display: none; }
        .footer-strip { flex-direction: column; gap: 8px; text-align: center; }
    }

    @media (max-width: 480px) {
        .class-grid { grid-template-columns: 1fr; }
        .banner-actions { flex-direction: column; align-items: flex-start; }
    }
</style>