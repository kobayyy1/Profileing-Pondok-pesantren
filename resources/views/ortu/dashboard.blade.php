<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wali Murid Dashboard – Daar Al-Ilmi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- TOP NAVIGATION BAR (Navy Blue) -->
    <header class="bg-blue-950 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3.5 flex justify-between items-center">
            <!-- Brand Logo -->
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-sm text-white">
                    <i class="fas fa-mosque"></i>
                </div>
                <div>
                    <h1 class="text-xs font-bold tracking-wider uppercase leading-tight">Daar Al-Ilmi</h1>
                    <p class="text-[9px] text-blue-300 tracking-widest">MONITORING WALI MURID</p>
                </div>
            </div>

            <!-- Tombol Keluar Sistem (Aksen Merah) -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-600 hover:bg-red-500 text-white font-bold py-1.5 px-3 rounded-lg text-[10px] transition-colors uppercase tracking-wider flex items-center gap-1">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </button>
            </form>
        </div>
    </header>

    <!-- MAIN BODY AREA -->
    <main class="container mx-auto max-w-4xl p-4 md:p-6 space-y-6 flex-1">

        <!-- Welcome Banner Card -->
        <div
            class="bg-white border border-slate-200 rounded-2xl p-5 md:p-6 shadow-sm flex flex-col sm:flex-row justify-between sm:items-center gap-4 relative overflow-hidden">
            <div class="absolute top-0 bottom-0 left-0 w-1.5 bg-red-600"></div>
            <div>
                <span class="text-[10px] font-bold text-red-600 uppercase tracking-widest block">Selamat Datang Wali
                    Murid</span>
                <h2 class="text-lg font-bold text-blue-950 mt-0.5">Bapak/Ibu {{ $ortu->name }}</h2>
                <p class="text-xs text-gray-500 mt-1">Pantau perkembangan ibadah harian dan capaian hafalan Quran
                    putra-putri Anda secara real-time dari asrama.</p>
            </div>
            <div class="bg-blue-50 text-blue-900 border border-blue-100 rounded-xl px-4 py-2.5 text-center shrink-0">
                <div class="text-xs font-bold">Jumlah Anak</div>
                <div class="text-2xl font-black mt-0.5">{{ $anakAnak->count() }} <span
                        class="text-xs font-normal text-gray-500">Santri</span></div>
            </div>
        </div>

        <!-- LIST ANAK / SANTRI GRID -->
        <div class="space-y-6">
            <h3
                class="text-xs font-bold text-blue-950 uppercase tracking-widest flex items-center gap-1.5 border-b border-gray-200 pb-2">
                <i class="fas fa-id-card text-blue-700"></i> Profil & Progress Perkembangan Aktual Anak
            </h3>

            @if ($anakAnak->isEmpty())
                <div
                    class="bg-white border border-slate-200 rounded-2xl p-8 text-center text-gray-400 italic shadow-sm">
                    <div class="text-3xl mb-2">👋</div>
                    Akun Anda belum ditautkan dengan data santri oleh Admin. Silakan hubungi sekretariat pondok.
                </div>
            @endif

            @foreach ($anakAnak as $anak)
                @php
                    // Ambil baris data laporan paling puncak (terbaru) untuk masing-masing anak
                    $latestMutabaah = $anak->mutabaahReports->first();
                    $latestTahfiz = $anak->tahfizReports->first();

                    // Blueprint nama singkatan indikator mutabaah
                    $indicators = [
                        'ql' => 'Qiyamul Lail (QL)',
                        'qs' => 'Qobliyah Shubuh (QS)',
                        'zp' => 'Zikir Pagi (ZP)',
                        'dh' => 'Sholat Dhuha (Dh)',
                        'qz' => 'Qobliyah Dzhuhur (QZ)',
                        'bz' => 'Ba\'diyah Dzhuhur (BZ)',
                        'zs' => 'Zikir Sore (ZS)',
                        'bm' => 'Ba\'diyah Maghrib (BM)',
                        'bi' => 'Ba\'diyah Isya\' (BI)',
                        'sj' => 'Sholat Jama\'ah Tanpa Masbuq (SJ)',
                    ];
                @endphp

                <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden flex flex-col mb-6">

                    <!-- Header Kartu Anak (Nama & Kelas) -->
                    <div
                        class="bg-slate-50 border-b border-slate-100 p-4 flex flex-col sm:flex-row justify-between sm:items-center gap-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-blue-900 text-white rounded-full flex items-center justify-center font-bold text-sm">
                                {{ strtoupper(substr($anak->nama_santri, 0, 2)) }}
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-blue-950">{{ $anak->nama_santri }}</h4>
                                <p class="text-[11px] text-gray-400 font-mono">NISN: {{ $anak->nisn }} | Kelas:
                                    {{ $anak->kelas }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Body Konten Utama Laporan -->
                    <div class="p-4 md:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- SEKTOR REAL 1: MUTABA'AH REPORT -->
                        <div class="border border-slate-100 bg-slate-50/40 rounded-xl p-4 space-y-3">
                            <div class="flex justify-between items-center border-b border-slate-100 pb-1.5">
                                <h5
                                    class="text-xs font-bold text-blue-900 uppercase tracking-wider flex items-center gap-1.5">
                                    <i class="fas fa-heart text-red-500"></i> Mutaba'ah Yaumiyyah (Ibadah)
                                </h5>
                                @if ($latestMutabaah)
                                    <span
                                        class="text-[9px] bg-red-600 text-white px-2 py-0.5 rounded font-bold font-mono">PEKAN:
                                        {{ $latestMutabaah->pekan }}</span>
                                @endif
                            </div>

                            <!-- Identitas Ustadz Pengasuh Asrama -->
                            @if ($latestMutabaah)
                                <div
                                    class="text-[10px] text-gray-500 bg-white px-2.5 py-1.5 rounded-lg border border-slate-100 flex items-center gap-1">
                                    <i class="fas fa-user-tie text-slate-400"></i>
                                    <span>Ustadz Pengasuh: <strong
                                            class="text-gray-700">{{ $latestMutabaah->ustadz->name }}</strong></span>
                                </div>
                            @endif

                            @if ($latestMutabaah)
                                <div class="space-y-2 max-h-[320px] overflow-y-auto pr-1">
                                    @foreach ($indicators as $key => $label)
                                        @php $score = $latestMutabaah->$key; @endphp
                                        <div
                                            class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100 text-xs">
                                            <span class="font-medium text-gray-700">{{ $label }}</span>

                                            <!-- Badge Status Mengikuti Nilai DB -->
                                            @if ($score == 'Sangat Bagus')
                                                <span
                                                    class="text-[9px] bg-green-100 text-green-800 border border-green-200 px-2 py-0.5 rounded font-bold">Sangat
                                                    Bagus</span>
                                            @elseif($score == 'Bagus')
                                                <span
                                                    class="text-[9px] bg-blue-100 text-blue-800 border border-blue-200 px-2 py-0.5 rounded font-bold">Bagus</span>
                                            @else
                                                <span
                                                    class="text-[9px] bg-red-100 text-red-800 border border-red-200 px-2 py-0.5 rounded font-bold">Perlu
                                                    Ditingkatkan</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-12 text-gray-400 italic text-xs">
                                    <i class="fas fa-clock text-xl mb-1.5 block text-slate-300"></i> Belum ada rekapan
                                    ibadah harian dari Ustadz Pengasuh untuk pekan ini.
                                </div>
                            @endif
                        </div>

                        <!-- SEKTOR REAL 2: TAHFIZH REPORT -->
                        <div
                            class="border border-slate-100 bg-slate-50/40 rounded-xl p-4 space-y-3 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center border-b border-slate-100 pb-1.5 mb-3">
                                    <h5
                                        class="text-xs font-bold text-blue-900 uppercase tracking-wider flex items-center gap-1.5">
                                        <i class="fas fa-quran text-amber-600"></i> Capaian Tahfiz (Hafalan)
                                    </h5>
                                    @if ($latestTahfiz)
                                        <span
                                            class="text-[9px] bg-red-600 text-white px-2 py-0.5 rounded font-bold font-mono">PEKAN:
                                            {{ $latestTahfiz->pekan }}</span>
                                    @endif
                                </div>

                                <!-- Identitas Ustadz Pengampu Halaqah Tahfizh -->
                                @if ($latestTahfiz)
                                    <div
                                        class="text-[10px] text-gray-500 bg-white px-2.5 py-1.5 rounded-lg border border-slate-100 flex items-center gap-1 mb-3">
                                        <i class="fas fa-chalkboard-teacher text-slate-400"></i>
                                        <span>Pengampu Tahfizh: <strong
                                                class="text-gray-700">{{ $latestTahfiz->ustadz->name }}</strong></span>
                                    </div>
                                @endif

                                @if ($latestTahfiz)
                                    <div class="grid grid-cols-2 gap-3 text-center mb-3">
                                        <div class="bg-white border border-slate-200 p-2 rounded-lg">
                                            <div class="text-[9px] text-gray-400 font-bold uppercase">Surat Akhir</div>
                                            <div class="text-xs font-black text-blue-950 mt-1">
                                                {{ $latestTahfiz->surat_akhir }}</div>
                                        </div>
                                        <div class="bg-white border border-slate-200 p-2 rounded-lg">
                                            <div class="text-[9px] text-gray-400 font-bold uppercase">Total Hafalan
                                            </div>
                                            <div class="text-xs font-black text-blue-950 mt-1">
                                                {{ $latestTahfiz->jumlah_hafalan_juz }} Juz</div>
                                        </div>
                                    </div>

                                    <div class="space-y-2 text-xs">
                                        <div
                                            class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                            <span class="text-gray-500 font-medium">Total Setoran Baru (Ziyadah)</span>
                                            <span
                                                class="font-bold text-slate-800">{{ $latestTahfiz->total_ziyadah_halaman }}
                                                Halaman</span>
                                        </div>
                                        <div
                                            class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                            <span class="text-gray-500 font-medium">Muroja'ah Mandiri (Fardiyyah)</span>
                                            <span
                                                class="font-bold text-slate-800">{{ $latestTahfiz->murojaah_fardiyyah_juz }}
                                                Juz</span>
                                        </div>
                                        <div
                                            class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                            <span class="text-gray-500 font-medium">Muroja'ah Disimak
                                                (Tsunaiyyah)</span>
                                            <span
                                                class="font-bold text-slate-800">{{ $latestTahfiz->murojaah_tsunaiyyah_halaman }}
                                                Halaman</span>
                                        </div>
                                        <div
                                            class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                            <span class="text-gray-500 font-medium">Kehadiran Halaqah</span>
                                            <span
                                                class="font-bold px-1.5 py-0.5 rounded text-[10px] {{ $latestTahfiz->absensi == 'Hadir' ? 'bg-green-50 text-green-700 border border-green-100' : 'bg-amber-50 text-amber-700 border border-amber-100' }}">
                                                {{ $latestTahfiz->absensi }}
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Bagian Catatan Catatan Evaluasi Ustadz -->
                                    <div
                                        class="text-[11px] text-gray-500 bg-white p-2.5 rounded-lg border border-slate-100 mt-3">
                                        <strong class="text-blue-950"><i class="fas fa-comment-dots text-blue-500"></i>
                                            Evaluasi Pengampu:</strong><br>
                                        <span
                                            class="italic text-gray-600">"{{ $latestTahfiz->catatan ?? 'Belum ada catatan evaluasi tertulis.' }}"</span>
                                    </div>
                                @else
                                    <div class="text-center py-20 text-gray-400 italic text-xs">
                                        <i class="fas fa-spinner text-xl mb-1.5 block text-slate-300"></i> Belum ada
                                        perkembangan hafalan baru yang di-input Muhaffiz.
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </main>

    <!-- FOOTER STRIP -->
    <footer class="bg-white border-t border-slate-200 py-3 text-center text-[10px] text-gray-400">
        &copy; {{ date('Y') }} Sistem Informasi Monitoring – Pondok Pesantren Modern Daar Al-Ilmi EMIISc
    </footer>

</body>

</html>
