<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Santri Baru – Daar Al-Ilmi EMIISc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans flex min-h-screen">

    <!-- SIDEBAR PANEL (Navy Blue) -->
    <aside class="w-64 bg-blue-950 text-white flex flex-col justify-between shrink-0 border-r border-blue-900 relative">
        <div class="absolute top-0 right-0 bottom-0 w-1 bg-red-600"></div>
        <div>
            <div class="p-4 border-b border-blue-900 flex items-center gap-2">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-sm text-white"><i
                        class="fas fa-mosque"></i></div>
                <div>
                    <h2 class="text-xs font-bold tracking-wider uppercase">Daar Al-Ilmi</h2>
                    <p class="text-[10px] text-blue-300">ADMIN PANEL</p>
                </div>
            </div>
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-2.5 px-3 py-2 text-blue-200 hover:bg-blue-900/30 hover:text-white rounded-lg text-xs transition-colors">
                    <i class="fas fa-tachometer-alt w-4 text-center"></i> Dashboard
                </a>
                <a href="#"
                    class="flex items-center gap-2.5 px-3 py-2 bg-blue-900/50 text-white rounded-lg text-xs font-bold">
                    <i class="fas fa-user-graduate w-4 text-center text-red-500"></i> Data Santri
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
                    class="w-full flex items-center justify-center gap-2 bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-lg text-xs transition-colors uppercase tracking-wider">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT (Dominan Putih) -->
    <main class="flex-1 flex flex-col min-w-0">
        <header class="bg-white border-b border-slate-200 px-6 py-4 flex justify-between items-center shadow-sm">
            <h1 class="text-sm font-bold text-blue-950 uppercase tracking-wider">Form Input Santri Baru</h1>
            <a href="{{ route('admin.dashboard') }}" class="text-xs font-bold text-blue-900 hover:underline"><i
                    class="fas fa-arrow-left mr-1"></i> Kembali</a>
        </header>

        <div class="p-6 md:p-8 max-w-3xl w-full mx-auto space-y-6 overflow-y-auto">

            <!-- Alert Validasi Error -->
            @if ($errors->any())
                <div class="p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-xs font-semibold">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><i class="fas fa-exclamation-circle mr-1"></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.santri.simpan') }}" method="POST" class="space-y-6">
                @csrf

                <!-- SEKTOR DATA ANAK -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-4">
                    <h3 class="text-xs font-bold text-blue-900 uppercase tracking-wider border-b border-gray-100 pb-2">
                        <i class="fas fa-child mr-1.5 text-red-500"></i> Biodata Calon Santri</h3>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Nama Lengkap
                            Santri</label>
                        <input type="text" name="nama_santri" value="{{ old('nama_santri') }}" required
                            placeholder="Contoh: Zaid Al-Fatih"
                            class="w-full border border-gray-300 rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">NISN Santri</label>
                            <input type="number" name="nisn" value="{{ old('nisn') }}" required
                                placeholder="Masukkan 10 digit NISN"
                                class="w-full border border-gray-300 rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Penempatan
                                Kelas</label>
                            <select name="kelas" required
                                class="w-full border border-gray-300 bg-white rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                                <option value="">-- Pilih Kelas --</option>
                                <option value="7-A">Kelas 7-A (MTs)</option>
                                <option value="7-B">Kelas 7-B (MTs)</option>
                                <option value="10-A">Kelas 10-A (MA)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- SEKTOR DATA ORANG TUA / WALIS -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-4">
                    <h3 class="text-xs font-bold text-blue-900 uppercase tracking-wider border-b border-gray-100 pb-2">
                        <i class="fas fa-user-friends mr-1.5 text-red-500"></i> Data Akun Orang Tua / Wali</h3>
                    <p class="text-[11px] text-gray-400 -mt-2">Email di bawah ini otomatis menjadi username wali murid
                        untuk memonitor nilai.</p>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Nama Lengkap Orang Tua /
                            Wali</label>
                        <input type="text" name="nama_ortu" value="{{ old('nama_ortu') }}" required
                            placeholder="Contoh: Ayah Yusuf"
                            class="w-full border border-gray-300 rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Alamat Email Orang
                            Tua</label>
                        <input type="email" name="email_ortu" value="{{ old('email_ortu') }}" required
                            placeholder="contoh: ortuzaid@gmail.com"
                            class="w-full border border-gray-300 rounded-lg px-3.5 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-xl transition-colors text-xs shadow-md shadow-blue-900/10 uppercase tracking-wider">
                    <i class="fas fa-save mr-1"></i> Simpan Data Santri & Aktifkan Akun Ortu
                </button>
            </form>

        </div>
    </main>

</body>

</html>
