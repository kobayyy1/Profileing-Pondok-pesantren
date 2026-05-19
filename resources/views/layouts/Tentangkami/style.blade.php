 <style>
        :root {
            --emerald-deep: #065f46;
            --emerald-mid: #059669;
            --teal-light: #ccfbf1;
            --gold: #d97706;
            --gold-light: #fef3c7;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* ── Ornament diagonal strip ── */
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
            background: radial-gradient(circle, #a7f3d0 0%, transparent 70%);
            opacity: .45;
            pointer-events: none;
        }

        .geo-bg {
            background-image:
                repeating-linear-gradient(60deg, transparent, transparent 28px, rgba(5, 150, 105, .06) 28px, rgba(5, 150, 105, .06) 29px),
                repeating-linear-gradient(-60deg, transparent, transparent 28px, rgba(5, 150, 105, .06) 28px, rgba(5, 150, 105, .06) 29px);
        }

        /* ── Animated reveal ── */
        .reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Timeline line ── */
        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #059669, #0d9488);
            transform: translateX(-50%);
        }

        /* ── Stat card hover ── */
        .stat-card {
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(6, 95, 70, .15);
        }

        /* ── Quote ornament ── */
        .arabic-quote {
            font-family: 'Scheherazade New', serif;
            font-size: 1.5rem;
            line-height: 2.2;
            direction: rtl;
            color: var(--emerald-deep);
        }

        /* ── Wavy divider ── */
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

        /* ── Scrollbar hide ── */
        .scrollbar-none::-webkit-scrollbar {
            display: none;
        }
    </style>