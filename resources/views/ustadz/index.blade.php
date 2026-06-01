<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustadz Control Panel – Daar Al-Ilmi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans min-h-screen p-4 md:p-6">
    <div class="max-w-4xl mx-auto space-y-6">

        <!-- Header Panel -->
        <div
            class="bg-blue-950 text-white p-5 rounded-2xl flex justify-between items-center shadow-lg relative overflow-hidden">
            <div class="absolute top-0 bottom-0 left-0 w-1.5 bg-red-600"></div>
            <div>
                <h1 class="text-sm font-bold tracking-wider uppercase">Panel Evaluasi Santri</h1>
                <p class="text-xs text-blue-200 mt-0.5">Ustadz Pengajar: <strong>{{ Auth::user()->name }}</strong></p>
            </div>
            <form action="{{ route('logout') }}" method="POST">@csrf
                <button type="submit"
                    class="bg-red-600 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider"><i
                        class="fas fa-sign-out-alt"></i> Keluar</button>
            </form>
        </div>

        @if (session('success'))
            <div class="p-3 bg-green-50 border border-green-200 text-green-800 rounded-xl text-xs font-semibold"><i
                    class="fas fa-check-circle mr-1 text-green-600"></i>{{ session('success') }}</div>
        @endif

        <!-- Daftar Santri -->
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-4 space-y-3">
            <h3 class="text-xs font-bold text-blue-950 uppercase tracking-widest border-b pb-2"><i
                    class="fas fa-users text-red-500 mr-1.5"></i> Pilih Santri untuk Di-update</h3>
            <div class="divide-y divide-slate-100">
                @foreach ($santris as $s)
                    <div class="py-3 flex flex-col sm:flex-row justify-between sm:items-center gap-3">
                        <div>
                            <h4 class="text-xs font-bold text-blue-950">{{ $s->nama_santri }}</h4>
                            <p class="text-[10px] text-gray-400 font-mono">NISN: {{ $s->nisn }} | Kelas:
                                {{ $s->kelas }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('ustadz.mutabaah.tambah', $s->id) }}"
                                class="bg-blue-900 hover:bg-blue-800 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wide"><i
                                    class="fas fa-heart mr-1"></i> Input Mutaba'ah</a>
                            <a href="{{ route('ustadz.tahfiz.tambah', $s->id) }}"
                                class="bg-red-600 hover:bg-red-500 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wide"><i
                                    class="fas fa-quran mr-1"></i> Input Tahfizh</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
