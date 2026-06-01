<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel – Daar Al-Ilmi EMIISc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans flex min-h-screen">

    <aside
        class="w-64 bg-blue-950 text-white flex flex-col justify-between shrink-0 border-r border-blue-900/40 relative">
        <div class="absolute top-0 right-0 bottom-0 w-1 bg-red-600"></div>

        <div>
            <div class="p-4 border-b border-blue-900 flex items-center gap-2">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-sm text-white">
                    <i class="fas fa-mosque"></i>
                </div>
                <div>
                    <h2 class="text-xs font-bold tracking-wider uppercase">Daar Al-Ilmi</h2>
                    <p class="text-[10px] text-blue-300">ADMIN PANEL</p>
                </div>
            </div>

            <nav class="p-4 space-y-1">
                <a href="#"
                    class="flex items-center gap-2.5 px-3 py-2 bg-blue-900/50 text-white rounded-lg text-xs font-bold">
                    <i class="fas fa-tachometer-alt w-4 text-center text-red-500"></i> Dashboard
                </a>
                <!-- Ubah baris menu Data Santri di file dashboard.blade.php Anda -->
                <a href="{{ route('admin.santri.index') }}"
                    class="flex items-center gap-2.5 px-3 py-2 text-blue-200 hover:bg-blue-900/30 hover:text-white rounded-lg text-xs transition-colors">
                    <i class="fas fa-user-graduate w-4 text-center text-blue-400"></i> Data Santri
                </a>
                <a href="#"
                    class="flex items-center gap-2.5 px-3 py-2 text-blue-200 hover:bg-blue-900/30 hover:text-white rounded-lg text-xs transition-colors">
                    <i class="fas fa-chalkboard-teacher w-4 text-center text-blue-400"></i> Data Ustadz
                </a>
                <a href="#"
                    class="flex items-center gap-2.5 px-3 py-2 text-blue-200 hover:bg-blue-900/30 hover:text-white rounded-lg text-xs transition-colors">
                    <i class="fas fa-book w-4 text-center text-blue-400"></i> Mata Pelajaran
                </a>
            </nav>
        </div>

        <div class="p-4 border-t border-blue-900">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-lg text-xs transition-colors shadow-md shadow-red-900/20 uppercase tracking-wider">
                    <i class="fas fa-sign-out-alt"></i> Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col min-w-0">
        <header class="bg-white border-b border-slate-200 px-6 py-4 flex justify-between items-center shadow-sm">
            <h1 class="text-sm font-bold text-blue-950 uppercase tracking-wider">Dashboard Utama</h1>
            <div class="flex items-center gap-2 text-xs font-semibold text-gray-700">
                <i class="fas fa-user-circle text-lg text-blue-900"></i>
                <span>Selamat datang, <strong class="text-blue-900">{{ Auth::user()->name }}</strong></span>
            </div>
        </header>

        <div class="p-6 md:p-8 space-y-6 flex-1 overflow-y-auto">

            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <h3 class="text-base font-bold text-blue-950">Alhamdulillah, Selamat Datang di Control Panel Anda</h3>
                <p class="text-xs text-gray-500 mt-1 max-w-2xl leading-relaxed">
                    Melalui panel ini, Anda dapat mengelola seluruh data master pondok pesantren, mendaftarkan akun
                    santri baru, membuatkan akses otomatis untuk orang tua murid, serta mengatur manajemen mata
                    pelajaran.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div
                    class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm flex items-center justify-between group hover:border-blue-300 transition-all">
                    <div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Total
                            Terdata</span>
                        <div class="text-2xl font-bold text-blue-950 my-0.5">{{ $stats['total_santri'] }}</div>
                        <span class="text-[11px] text-gray-500 font-medium">Santri Aktif</span>
                    </div>
                    <div
                        class="w-10 h-10 bg-blue-50 text-blue-700 rounded-xl flex items-center justify-center text-base">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div
                    class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm flex items-center justify-between group hover:border-blue-300 transition-all">
                    <div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Total
                            Terdata</span>
                        <div class="text-2xl font-bold text-blue-950 my-0.5">{{ $stats['total_ustadz'] }}</div>
                        <span class="text-[11px] text-gray-500 font-medium">Ustadz & Pengajar</span>
                    </div>
                    <div class="w-10 h-10 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-base">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div
                    class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm flex items-center justify-between group hover:border-blue-300 transition-all">
                    <div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Total
                            Aktif</span>
                        <div class="text-2xl font-bold text-blue-950 my-0.5">{{ $stats['total_mapel'] }}</div>
                        <span class="text-[11px] text-gray-500 font-medium">Mata Pelajaran Kesetaraan</span>
                    </div>
                    <div
                        class="w-10 h-10 bg-blue-50 text-blue-700 rounded-xl flex items-center justify-center text-base">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
