<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Tahfizh – {{ $santri->nama_santri }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 text-gray-800 font-sans min-h-screen p-4 md:p-6">
    <div class="max-w-xl mx-auto bg-white border border-slate-200 rounded-2xl shadow-md overflow-hidden">
        <div class="bg-red-600 text-white p-4 font-bold text-xs uppercase flex justify-between items-center">
            <span>Perkembangan Belajar Tahfizh</span>
            <a href="{{ route('ustadz.index') }}" class="text-[10px] text-red-200 hover:underline">Kembali</a>
        </div>

        <form action="{{ route('ustadz.tahfiz.simpan', $santri->id) }}" method="POST" class="p-5 space-y-4">
            @csrf
            <div class="bg-red-50/50 p-3 rounded-xl border border-red-100 text-xs">
                Santri: <strong class="text-blue-950">{{ $santri->nama_santri }}</strong>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Pekan Laporan</label>
                    <input type="text" name="pekan" required placeholder="02-06 Mei 2026"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Absensi Halaqah</label>
                    <select name="absensi" class="w-full border bg-white rounded-lg p-2 text-xs focus:outline-none">
                        <option value="Hadir">Hadir</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin">Izin</option>
                        <option value="Alfa">Tanpa Keterangan</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Surat Akhir</label>
                    <input type="text" name="surat_akhir" required placeholder="Contoh: al-Baqarah"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Jumlah Hafalan (Juz)</label>
                    <input type="number" name="jumlah_hafalan_juz" required placeholder="Contoh: 30"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Total Ziyadah (Hlm)</label>
                    <input type="number" name="total_ziyadah_halaman" required placeholder="17"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Murojaah Fardiyyah
                        (Juz)</label>
                    <input type="number" name="murojaah_fardiyyah_juz" required placeholder="10"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Murojaah Tsunaiyyah
                        (Hlm)</label>
                    <input type="number" name="murojaah_tsunaiyyah_halaman" required placeholder="0"
                        class="w-full border rounded-lg p-2 text-xs focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block text-[10px] font-bold uppercase text-gray-500 mb-1">Catatan Evaluasi Ustadz</label>
                <textarea name="catatan" rows="3" placeholder="Tulis catatan perkembangan belajar..."
                    class="w-full border rounded-lg p-2 text-xs focus:outline-none"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-red-600 text-white font-bold py-2.5 rounded-xl text-xs uppercase tracking-wider shadow-md">Simpan
                Catatan Tahfizh</button>
        </form>
    </div>
</body>

</html>
