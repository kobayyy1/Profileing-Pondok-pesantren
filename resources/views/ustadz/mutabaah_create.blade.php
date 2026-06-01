<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mutaba'ah – {{ $santri->nama_santri }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans min-h-screen p-4 md:p-6">
    <div class="max-w-xl mx-auto bg-white border border-slate-200 rounded-2xl shadow-md overflow-hidden">
        <div class="bg-blue-950 text-white p-4 font-bold text-xs uppercase flex justify-between items-center">
            <span>Rekap Mutaba'ah Harian</span>
            <a href="{{ route('ustadz.index') }}" class="text-[10px] text-blue-300 hover:underline">Kembali</a>
        </div>

        <form action="{{ route('ustadz.mutabaah.simpan', $santri->id) }}" method="POST" class="p-5 space-y-4">
            @csrf
            <div class="bg-blue-50/50 p-3 rounded-xl border border-blue-100 text-xs">
                Santri: <strong class="text-blue-950">{{ $santri->nama_santri }}</strong> (Kelas {{ $santri->kelas }})
            </div>

            <div>
                <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Pekan Laporan</label>
                <input type="text" name="pekan" required placeholder="Contoh: 02-06 Mei 2026"
                    class="w-full border border-gray-300 rounded-lg p-2 text-xs focus:outline-none focus:border-blue-900">
            </div>

            <!-- Loop 10 Ibadah -->
            @foreach (['ql' => 'Qiyamul Lail (QL)', 'qs' => 'Qobliyah Shubuh (QS)', 'zp' => 'Zikir Pagi (ZP)', 'dh' => 'Sholat Dhuha (Dh)', 'qz' => 'Qobliyah Dzhuhur (QZ)', 'bz' => 'Ba\'diyah Dzhuhur (BZ)', 'zs' => 'Zikir Sore (ZS)', 'bm' => 'Ba\'diyah Maghrib (BM)', 'bi' => 'Ba\'diyah Isya\' (BI)', 'sj' => 'Sholat Jama\'ah Tanpa Masbuq (SJ)'] as $key => $label)
                <div class="flex items-center justify-between border-b pb-2 text-xs">
                    <span class="font-medium text-gray-700">{{ $label }}</span>
                    <div class="flex gap-2">
                        <label class="flex items-center gap-1 cursor-pointer"><input type="radio"
                                name="{{ $key }}" value="Sangat Bagus" checked class="text-blue-900"> <span
                                class="text-[10px] bg-green-50 text-green-800 px-1.5 rounded font-bold">Sangat
                                Bagus</span></label>
                        <label class="flex items-center gap-1 cursor-pointer"><input type="radio"
                                name="{{ $key }}" value="Bagus"> <span
                                class="text-[10px] bg-blue-50 text-blue-800 px-1.5 rounded font-bold">Bagus</span></label>
                        <label class="flex items-center gap-1 cursor-pointer"><input type="radio"
                                name="{{ $key }}" value="Perlu Ditingkatkan"> <span
                                class="text-[10px] bg-red-50 text-red-700 px-1.5 rounded font-bold">Perlu
                                Ditingkatkan</span></label>
                    </div>
                </div>
            @endforeach

            <button type="submit"
                class="w-full bg-blue-950 text-white font-bold py-2.5 rounded-xl text-xs uppercase tracking-wider shadow-md">Simpan
                Rekap Mutaba'ah</button>
        </form>
    </div>
</body>

</html>
