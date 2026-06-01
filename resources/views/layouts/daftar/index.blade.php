@extends('layouts.app')


@include('layouts.navbar')

{{-- ─────────────────────── HERO SECTION ─────────────────────── --}}
<section class="relative pt-20 overflow-hidden">
    <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 min-h-[280px] flex items-center">
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-red-600/10 rounded-full blur-2xl"></div>

        <div class="container mx-auto px-6 py-12 relative z-10 text-center md:text-left">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div>
                    <span
                        class="inline-block bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                        PPDB Online 2026/2027
                    </span>
                    <h1 class="font-['Playfair_Display'] text-3xl md:text-5xl text-white font-bold leading-tight mb-2">
                        Pendaftaran Santri Baru
                    </h1>
                    <p class="text-blue-100 text-sm md:text-base max-w-xl font-sans">
                        Kemudahan pendaftaran tanpa ribet. Klik tombol pendaftaran untuk langsung terhubung dengan admin
                        PPDB asrama kami via WhatsApp.
                    </p>
                </div>
                <div class="shrink-0">
                    <a href="https://wa.me/6285883037990?text=Assalamu'alaikum%20Panitia%20PPDB%20Daar%20Al-Ilmi,%20saya%20ingin%20melakukan%20pendaftaran%20santri%20baru."
                        target="_blank"
                        class="inline-block bg-red-600 hover:bg-red-500 text-white text-sm font-bold px-6 py-3.5 rounded-lg transition-all shadow-lg shadow-red-900/30">
                        <i class="fab fa-whatsapp mr-2 text-base"></i>Hubungi Panitia PPDB
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wave-divider -mt-1">
        <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-10">
            <path d="M0,20 C360,40 1080,0 1440,20 L1440,40 L0,40 Z" fill="#ffffff" />
        </svg>
    </div>
</section>

{{-- ─────────────────────── ALUR & SYARAT (DISESUAIKAN KE WHATSAPP) ─────────────────────── --}}
<section class="py-14 px-4 bg-slate-50 border-t border-b border-slate-200/60">
    <div class="container mx-auto max-w-5xl">
        <div class="grid md:grid-cols-2 gap-12">

            <!-- Alur Pendaftaran Baru via WhatsApp -->
            <div>
                <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950 mb-6 flex items-center gap-2">
                    <i class="fas fa-route text-blue-600 text-lg"></i> Alur Pendaftaran Chat WA
                </h3>
                <div
                    class="space-y-6 relative before:absolute before:bottom-2 before:top-2 before:left-3.5 before:w-0.5 before:bg-blue-100">
                    <div class="flex gap-4 relative">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-600 text-white text-xs font-bold flex items-center justify-center shrink-0 z-10">
                            1</div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Klik Tombol Daftar</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Tekan tombol pendaftaran WhatsApp untuk membuka chat
                                langsung dengan Admin PPDB.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 relative">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-600 text-white text-xs font-bold flex items-center justify-center shrink-0 z-10">
                            2</div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Kirim Format Data</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Admin akan mengirimkan format biodata singkat. Isi
                                data tersebut langsung di ruang chat.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 relative">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-600 text-white text-xs font-bold flex items-center justify-center shrink-0 z-10">
                            3</div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Dapatkan Nomor Tes</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Setelah data diverifikasi oleh Panitia, Anda akan
                                menerima kartu ujian/jadwal tes seleksi berbentuk file digital.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 relative">
                        <div
                            class="w-8 h-8 rounded-full bg-red-600 text-white text-xs font-bold flex items-center justify-center shrink-0 z-10">
                            4</div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Ujian & Registrasi Ulang</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Mengikuti rangkaian tes sesuai jadwal, lalu
                                melakukan pemberkasan fisik jika dinyatakan lulus.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Syarat Berkas -->
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <h3 class="font-['Playfair_Display'] text-xl font-bold text-blue-950 mb-4 flex items-center gap-2">
                    <i class="fas fa-folder-open text-red-600 text-lg"></i> Persyaratan Berkas
                </h3>
                <p class="text-xs text-gray-500 mb-4">Berkas fisik dikumpulkan setelah dinyatakan lulus seleksi masuk:
                </p>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-blue-600 mt-1 text-xs"></i>
                        <span>Fotokopi Kartu Keluarga (KK) & Akta Kelahiran <span class="text-xs text-gray-400">(3
                                Lembar)</span></span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-blue-600 mt-1 text-xs"></i>
                        <span>Fotokopi Ijazah / Surat Keterangan Lulus (SKL) dilegalisir</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-blue-600 mt-1 text-xs"></i>
                        <span>Fotokopi Raport 3 semester terakhir</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-blue-600 mt-1 text-xs"></i>
                        <span>Pas Foto berwarna latar merah ukuran 3x4 & 4x6 <span
                                class="text-xs text-gray-400">(Masing-masing 4 lembar)</span></span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-blue-600 mt-1 text-xs"></i>
                        <span>Surat Keterangan Sehat dari Dokter / Puskesmas</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ─────────────────────── SEKSI CTA PENGGANTI FORM (DOMINAN PUTIH) ─────────────────────── --}}
<section class="py-16 px-4 bg-white">
    <div class="container mx-auto max-w-3xl">
        <!-- Box Informasi Utama Pendaftaran -->
        <div class="bg-slate-50 rounded-2xl border border-slate-200/80 p-8 md:p-12 text-center shadow-sm">
            <div
                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                <i class="fas fa-comments-alt"></i>
            </div>

            <h2 class="font-['Playfair_Display'] text-2xl md:text-3xl text-blue-900 font-bold mb-3">
                Mulai Pendaftaran Santri Baru
            </h2>
            <p class="text-sm text-gray-600 max-w-lg mx-auto mb-8 leading-relaxed">
                Sistem kami mendeteksi pendaftaran langsung menggunakan aplikasi WhatsApp demi mempercepat komunikasi
                interaktif antara tim penguji asrama dengan wali murid.
            </p>

            <!-- Tombol Utama Mengarah ke WA -->
            <div class="inline-flex flex-col sm:flex-row gap-4 justify-center w-full sm:w-auto">
                <a href="https://wa.me/6285883037990?text=Assalamu'alaikum%20Panitia%20PPDB%20Daar%20Al-Ilmi,%20saya%20ingin%20mendaftar%20sebagai%20santri%20baru.%20Mohon%20informasi%20format%20datanya."
                    target="_blank"
                    class="bg-blue-900 hover:bg-blue-800 text-white font-bold px-8 py-4 rounded-xl transition-colors text-sm shadow-md shadow-blue-900/10 tracking-wider flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp text-lg"></i> CHAT PENDAFTARAN SEKARANG
                </a>
            </div>

            <!-- Catatan Bantuan Khusus -->
            <div
                class="mt-8 pt-6 border-t border-slate-200/60 grid grid-cols-1 sm:grid-cols-2 gap-4 text-left text-xs text-gray-500">
                <div class="flex items-center gap-2.5">
                    <i class="fas fa-clock text-blue-600 text-sm"></i>
                    <span><strong>Waktu Layanan:</strong><br>Setiap Hari (08.00 - 20.00 WIB)</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <i class="fas fa-user-shield text-red-600 text-sm"></i>
                    <span><strong>Verifikasi Aman:</strong><br>Nomor resmi panitia terverifikasi sistem.</span>
                </div>
            </div>
        </div>
    </div>
</section>
