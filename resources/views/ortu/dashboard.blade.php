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

    <header class="bg-blue-950 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3.5 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-sm text-white">
                    <i class="fas fa-mosque"></i>
                </div>
                <div>
                    <h1 class="text-xs font-bold tracking-wider uppercase leading-tight">Daar Al-Ilmi</h1>
                    <p class="text-[9px] text-blue-300 tracking-widest">MONITORING WALI MURID</p>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-600 hover:bg-red-500 text-white font-bold py-1.5 px-3 rounded-lg text-[10px] transition-colors uppercase tracking-wider flex items-center gap-1">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </button>
            </form>
        </div>
    </header>

    <main class="container mx-auto max-w-4xl p-4 md:p-6 space-y-6 flex-1">

        <div
            class="bg-white border border-slate-200 rounded-2xl p-5 md:p-6 shadow-sm flex flex-col sm:flex-row justify-between sm:items-center gap-4 relative overflow-hidden">
            <div class="absolute top-0 bottom-0 left-0 w-1.5 bg-red-600"></div>
            <div>
                <span class="text-[10px] font-bold text-red-600 uppercase tracking-widest block">Selamat Datang Wali
                    Murid</span>
                <h2 class="text-lg font-bold text-blue-950 mt-0.5">Bapak/Ibu {{ $ortu->name }}</h2>
                <p class="text-xs text-gray-500 mt-1">Pantau perkembangan akademik, hafalan Quran, dan kepesantrenan
                    putra-putri Anda secara real-time.</p>
            </div>
            <div class="bg-blue-50 text-blue-900 border border-blue-100 rounded-xl px-4 py-2.5 text-center shrink-0">
                <div class="text-xs font-bold">Jumlah Anak</div>
                <div class="text-2xl font-black mt-0.5">{{ $anakAnak->count() }} <span
                        class="text-xs font-normal text-gray-500">Santri</span></div>
            </div>
        </div>

        <div class="space-y-6">
            <h3
                class="text-xs font-bold text-blue-950 uppercase tracking-widest flex items-center gap-1.5 border-b border-gray-200 pb-2">
                <i class="fas fa-id-card text-blue-700"></i> Profil & Progress Perkembangan Anak
            </h3>

            @if ($anakAnak->isEmpty())
                <div
                    class="bg-white border border-slate-200 rounded-2xl p-8 text-center text-gray-400 italic shadow-sm">
                    <div class="text-3xl mb-2">👋</div>
                    Akun Anda belum ditautkan dengan data santri oleh Admin. Silakan hubungi sekretariat pondok.
                </div>
            @endif

            @foreach ($anakAnak as $anak)
                <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden flex flex-col">

                    <div
                        class="bg-slate-50 border-b border-slate-100 p-4 flex flex-col sm:flex-row justify-between sm:items-center gap-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-blue-900 text-white rounded-full flex items-center justify-center font-bold text-sm">
                                {{ strtoupper(substr($anak->nama_santri, 0, 2)) }}
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-blue-950">{{ $anak->nama_santri }}</h4>
                                <p class="text-[11px] text-gray-400 font-mono">NISN: {{ $anak->nisn }}</p>
                            </div>
                        </div>
                        <div>
                            <span
                                class="bg-blue-50 text-blue-800 border border-blue-100 font-bold px-3 py-1 rounded-full text-[10px]">
                                Kelas: {{ $anak->kelas }}
                            </span>
                        </div>
                    </div>

                    <div class="p-4 md:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div class="border border-slate-100 bg-slate-50/40 rounded-xl p-4 space-y-3">
                            <h5
                                class="text-xs font-bold text-blue-900 uppercase tracking-wider flex items-center gap-1.5 border-b border-slate-100 pb-1.5">
                                <i class="fas fa-quran text-amber-600"></i> Capaian Tahfidz (Hafalan)
                            </h5>
                            <div class="grid grid-cols-2 gap-3 text-center">
                                <div class="bg-white border border-slate-200 p-2.5 rounded-lg">
                                    <div class="text-[10px] text-gray-400 font-bold uppercase">Hafalan Terakhir</div>
                                    <div class="text-xs font-bold text-gray-800 mt-1">Surah Al-Mulk</div>
                                    <div class="text-[10px] text-gray-400 mt-0.5">Ayat 1 - 15</div>
                                </div>
                                <div class="bg-white border border-slate-200 p-2.5 rounded-lg">
                                    <div class="text-[10px] text-gray-400 font-bold uppercase">Status Kelancaran</div>
                                    <div
                                        class="text-[10px] font-bold bg-green-100 text-green-800 border border-green-200 rounded px-1.5 py-0.5 inline-block mt-2">
                                        Sangat Lancar (Mumtaz)
                                    </div>
                                </div>
                            </div>
                            <div class="text-[11px] text-gray-500 bg-white p-2.5 rounded-lg border border-slate-100">
                                <strong>Catatan Ustadz Pengampu:</strong><br>
                                <span class="italic text-gray-600">"Alhamdulillah bacaan tajwid Ananda sudah sangat
                                    konsisten, hafalan baru silakan di-murojaah kembali di kamar asrama sebelum setoran
                                    besok."</span>
                            </div>
                        </div>

                        <div class="border border-slate-100 bg-slate-50/40 rounded-xl p-4 space-y-3">
                            <h5
                                class="text-xs font-bold text-blue-900 uppercase tracking-wider flex items-center gap-1.5 border-b border-slate-100 pb-1.5">
                                <i class="fas fa-chart-line text-blue-600"></i> Evaluasi Belajar Formal
                            </h5>

                            <div class="space-y-2 text-xs">
                                <div
                                    class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                    <span class="font-medium text-gray-700">Fiqih & Tarikh Islam</span>
                                    <span
                                        class="font-bold text-blue-900 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">88
                                        / B</span>
                                </div>
                                <div
                                    class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                    <span class="font-medium text-gray-700">Bahasa Arab & Nahwu</span>
                                    <span
                                        class="font-bold text-blue-900 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">82
                                        / B</span>
                                </div>
                                <div
                                    class="flex justify-between items-center bg-white p-2 rounded-lg border border-slate-100">
                                    <span class="font-medium text-gray-700">Islamic Technopreneur (IT)</span>
                                    <span
                                        class="font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded border border-red-100">95
                                        / A</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </main>

    <footer class="bg-white border-t border-slate-200 py-3 text-center text-[10px] text-gray-400">
        &copy; {{ date('Y') }} Sistem Informasi Akademik Monitoring – Pondok Pesantren Modern Daar Al-Ilmi EMIISc
    </footer>

</body>

</html>
