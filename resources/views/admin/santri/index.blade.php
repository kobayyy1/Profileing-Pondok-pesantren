<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master Santri – Control Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans flex min-h-screen">

    <aside class="w-64 bg-blue-950 text-white flex flex-col justify-between shrink-0 border-r border-blue-900 relative">
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
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-2.5 px-3 py-2 text-blue-200 hover:bg-blue-900/30 hover:text-white rounded-lg text-xs transition-colors">
                    <i class="fas fa-tachometer-alt w-4 text-center"></i> Dashboard
                </a>
                <a href="{{ route('admin.santri.index') }}"
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

    <main class="flex-1 flex flex-col min-w-0">
        <header class="bg-white border-b border-slate-200 px-6 py-4 flex justify-between items-center shadow-sm">
            <h1 class="text-sm font-bold text-blue-950 uppercase tracking-wider">Database Master Santri</h1>

            <a href="{{ route('admin.santri.tambah') }}"
                class="bg-red-600 hover:bg-red-500 text-white font-bold px-4 py-2 rounded-lg text-xs transition-colors shadow-md shadow-red-900/20 uppercase tracking-wider flex items-center gap-1.5">
                <i class="fas fa-plus-circle"></i> Tambah Santri Baru
            </a>
        </header>

        <div class="p-6 md:p-8 space-y-4 flex-1 overflow-y-auto">

            @if (session('success'))
                <div
                    class="p-3.5 bg-green-50 border border-green-200 text-green-800 rounded-xl text-xs font-semibold flex items-center gap-2 shadow-sm animate-pulse">
                    <i class="fas fa-check-circle text-sm text-green-600"></i>
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-blue-900 text-white text-xs font-semibold uppercase tracking-wider">
                                <th class="p-4 w-12 text-center">No</th>
                                <th class="p-4">Nama Santri</th>
                                <th class="p-4">NISN</th>
                                <th class="p-4 text-center">Kelas</th>
                                <th class="p-4">Nama Orang Tua</th>
                                <th class="p-4">Akun Login Ortu (Email)</th>
                                <th class="p-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs text-gray-700 divide-y divide-slate-100">
                            @forelse($santris as $index => $s)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="p-4 text-center font-medium text-gray-400">{{ $index + 1 }}</td>
                                    <td class="p-4 font-bold text-blue-950">{{ $s->nama_santri }}</td>
                                    <td class="p-4 font-mono tracking-wide text-gray-600">{{ $s->nisn }}</td>
                                    <td class="p-4 text-center">
                                        <span
                                            class="bg-blue-50 text-blue-800 font-bold px-2 py-0.5 rounded text-[10px] border border-blue-100">
                                            {{ $s->kelas }}
                                        </span>
                                    </td>
                                    <td class="p-4 font-medium text-gray-800">{{ $s->orangTua->name }}</td>
                                    <td class="p-4">
                                        <div class="flex items-center gap-1.5 text-gray-500">
                                            <i class="fas fa-user-lock text-[10px] text-slate-400"></i>
                                            <span>{{ $s->orangTua->email }}</span>
                                        </div>
                                    </td>
                                    <td class="p-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('admin.santri.edit', $s->id) }}"
                                                class="inline-flex items-center gap-1 bg-blue-50 border border-blue-200 hover:bg-blue-100 text-blue-700 font-bold px-2.5 py-1 rounded text-[11px] transition-colors">
                                                <i class="fas fa-edit text-[10px]"></i> Edit
                                            </a>

                                            <form action="{{ route('admin.santri.hapus', $s->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data santri {{ $s->nama_santri }}?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center gap-1 bg-red-50 border border-red-200 hover:bg-red-100 text-red-600 font-bold px-2.5 py-1 rounded text-[11px] transition-colors">
                                                    <i class="fas fa-trash-alt text-[10px]"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="p-8 text-center text-gray-400 italic">
                                        <div class="text-2xl mb-2">📂</div>
                                        Belum ada data santri terdaftar. Silakan klik tombol "Tambah Santri Baru".
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
