<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem - Daar Al-Ilmi EMIISc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4 font-sans text-gray-800">

    <div class="w-full max-w-md bg-white border border-slate-200 rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-gradient-to-br from-blue-900 to-indigo-900 p-6 text-center relative">
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-red-600"></div>
            <div
                class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mx-auto mb-3 text-white text-xl">
                <i class="fas fa-user-shield"></i>
            </div>
            <h1 class="text-white font-bold text-lg tracking-wide">SIAKAD CONTROL PANEL</h1>
            <p class="text-blue-200 text-xs mt-0.5">Pondok Pesantren Modern Daar Al-Ilmi EMIISc</p>
        </div>

        <div class="p-6 md:p-8">
            @if ($errors->any())
                <div
                    class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-xs font-semibold flex items-start gap-2">
                    <i class="fas fa-exclamation-circle mt-0.5 shrink-0"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login.proses') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Alamat Email / Akun</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-400 text-xs"><i
                                class="fas fa-envelope"></i></span>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="admin@gmail.com"
                            class="w-full border border-gray-300 rounded-lg pl-9 pr-4 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>
                </div>

                <div>
                    <label class="block text-[11px] font-bold text-gray-700 uppercase mb-1">Kata Sandi
                        (Password)</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-400 text-xs"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" required placeholder="••••••••"
                            class="w-full border border-gray-300 rounded-lg pl-9 pr-4 py-2 text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-1.5 text-xs text-gray-500 cursor-pointer select-none">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-blue-900 focus:ring-blue-900">
                        <span>Ingat Saya</span>
                    </label>
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-2.5 px-4 rounded-lg transition-colors text-xs shadow-md shadow-blue-900/10 uppercase tracking-wider">
                        Masuk ke Sistem
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
