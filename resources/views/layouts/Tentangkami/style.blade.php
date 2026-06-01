<style>
    /* Mengubah Root CSS Variable agar sesuai tema baru */
    :root {
        --blue-deep: #1e3a8a;
        /* blue-900 */
        --blue-mid: #2563eb;
        /* blue-600 */
        --slate-light: #f8fafc;
        /* slate-50 */
        --red-accent: #dc2626;
        /* red-600 */
        --red-light: #fee2e2;
        /* red-100 */
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .font-display {
        font-family: 'Playfair Display', serif;
    }

    /* Ornament diagonal strip */
    .diagonal-strip {
        position: relative;
        overflow: hidden;
    }

    .diagonal-strip::before {
        content: '';
        position: absolute;
        top: -60px;
        right: -80px;
        width: 340px;
        height: 340px;
        background: radial-gradient(circle, #bbf7d0 0%, transparent 70%);
        opacity: .2;
        /* Diturunkan opasitasnya agar menyatu ke latar putih */
        pointer-events: none;
    }

    .geo-bg {
        background-image:
            repeating-linear-gradient(60deg, transparent, transparent 28px, rgba(37, 99, 235, .04) 28px, rgba(37, 99, 235, .04) 29px),
            repeating-linear-gradient(-60deg, transparent, transparent 28px, rgba(37, 99, 235, .04) 28px, rgba(37, 99, 235, .04) 29px);
    }

    /* Animated reveal */
    .reveal {
        opacity: 0;
        transform: translateY(32px);
        transition: opacity .7s ease, transform .7s ease;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Timeline line: Diubah dari warna hijau menjadi gradasi Biru-Merah */
    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, var(--blue-mid), var(--red-accent));
        transform: translateX(-50%);
    }

    /* Stat card hover: Ditransisikan ke bayangan biru */
    .stat-card {
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(30, 58, 138, 0.08);
    }

    /* Quote ornament */
    .arabic-quote {
        font-family: 'Scheherazade New', serif;
        font-size: 1.5rem;
        line-height: 2.2;
        direction: rtl;
        color: var(--blue-deep);
    }

    /* Wavy divider */
    .wave-divider svg {
        display: block;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .float-anim {
        animation: float 5s ease-in-out infinite;
    }

    /* Scrollbar hide */
    .scrollbar-none::-webkit-scrollbar {
        display: none;
    }
</style>
