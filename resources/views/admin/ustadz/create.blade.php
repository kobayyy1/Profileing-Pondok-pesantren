<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun Ustadz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-gray-800 flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md bg-white border rounded-2xl shadow-md overflow-hidden">
        <div class="bg-blue-950 text-white p-4 font-bold text-xs uppercase flex justify-between items-center">
            <span>Tambah Guru / Ustadz Baru</span>
            <a href="{{ route('admin.ustadz.index') }}" class="text-[10px] text-blue-300">Kembali</a>
        </div>
        <form action="{{ route('admin.ustadz.simpan') }}" method="POST" class="p-5 space-y-4">
            @csrf
            <div>
                <label class="block text-[10px] font-bold uppercase text-gray-700 mb-1">Nama Lengkap Ustadz beserta
                    Gelar</label>
                <input type="text" name="name" required placeholder="Contoh: Ustadz Umar, S.Ag"
                    class="w-full border rounded-lg p-2 text-xs focus:outline-none focus:border-blue-900">
            </div>
            <div>
                <label class="block text-[10px] font-bold uppercase text-gray-700 mb-1">Email / Username Login</label>
                <input type="email" name="email" required placeholder="contoh: umar@gmail.com"
                    class="w-full border rounded-lg p-2 text-xs focus:outline-none focus:border-blue-900">
            </div>
            <div>
                <label class="block text-[10px] font-bold uppercase text-gray-700 mb-1">Kata Sandi Akun</label>
                <input type="password" name="password" required placeholder="Minimal 6 karakter"
                    class="w-full border rounded-lg p-2 text-xs focus:outline-none focus:border-blue-900">
            </div>
            <button type="submit"
                class="w-full bg-blue-950 text-white font-bold py-2 rounded-lg text-xs uppercase tracking-wider">Daftarkan
                Akun Ustadz</button>
        </form>
    </div>
</body>

</html>
