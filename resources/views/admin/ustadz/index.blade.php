<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengajar Ustadz – Control Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans flex min-h-screen">

    <!-- Taruh kode sidebar kamu di sini, ubah href "Data Ustadz" ke {{ route('admin.ustadz.index') }} -->
    <aside class="w-64 bg-blue-950 text-white p-4 space-y-4">
        <div class="font-bold text-sm border-b border-blue-900 pb-2">ADMIN PANEL</div>
        <nav class="space-y-1 flex flex-col">
            <a href="{{ route('admin.dashboard') }}"
                class="text-xs text-blue-200 py-2 px-3 hover:bg-blue-900 rounded">Dashboard</a>
            <a href="{{ route('admin.santri.index') }}"
                class="text-xs text-blue-200 py-2 px-3 hover:bg-blue-900 rounded">Data Santri</a>
            <a href="{{ route('admin.ustadz.index') }}"
                class="text-xs bg-blue-900 text-white font-bold py-2 px-3 rounded">Data Ustadz</a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col">
        <header class="bg-white border-b p-4 flex justify-between items-center shadow-sm">
            <h1 class="text-sm font-bold text-blue-950 uppercase">Manajemen Data Ustadz</h1>
            <a href="{{ route('admin.ustadz.tambah') }}"
                class="bg-red-600 hover:bg-red-500 text-white font-bold px-3 py-1.5 rounded-lg text-xs uppercase tracking-wider"><i
                    class="fas fa-plus-circle mr-1"></i> Tambah Ustadz</a>
        </header>

        <div class="p-6 space-y-4">
            @if (session('success'))
                <div class="p-3 bg-green-50 border border-green-200 text-green-800 rounded-xl text-xs font-semibold">
                    {{ session('success') }}</div>
            @endif

            <div class="bg-white border rounded-2xl shadow-sm overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-blue-900 text-white text-xs uppercase font-semibold">
                            <th class="p-4 w-12 text-center">No</th>
                            <th class="p-4">Nama Lengkap Guru / Ustadz</th>
                            <th class="p-4">Username / Email Login</th>
                            <th class="p-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-xs divide-y">
                        @forelse($ustadzs as $index => $u)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 text-center text-gray-400">{{ $index + 1 }}</td>
                                <td class="p-4 font-bold text-blue-950">{{ $u->name }}</td>
                                <td class="p-4 text-gray-600 font-mono">{{ $u->email }}</td>
                                <td class="p-4 text-center">
                                    <form action="{{ route('admin.ustadz.hapus', $u->id) }}" method="POST"
                                        onsubmit="return confirm('Hapus akun ustadz {{ $u->name }}?')">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-50 text-red-600 border border-red-200 px-2.5 py-1 rounded font-bold hover:bg-red-100"><i
                                                class="fas fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-6 text-center text-gray-400 italic">Belum ada akun ustadz
                                    yang terdaftar.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
