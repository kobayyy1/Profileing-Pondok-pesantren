<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Al-Hikmah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-emerald-50 to-teal-50">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-lg fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="bg-gradient-to-br from-emerald-600 to-teal-600 p-2 rounded-lg">
                        <i class="fas fa-mosque text-white text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">Al-Hikmah</h1>
                        <p class="text-xs text-gray-600">Pondok Pesantren Modern</p>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-emerald-600 font-semibold hover:text-teal-600 transition-colors">Home</a>
                    <a href="#tentang" class="text-gray-700 hover:text-emerald-600 transition-colors">Tentang Kami</a>
                    <a href="#kontak" class="text-gray-700 hover:text-emerald-600 transition-colors">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 space-y-3">
                <a href="#home" class="block text-emerald-600 font-semibold hover:text-teal-600 transition-colors">Home</a>
                <a href="#tentang" class="block text-gray-700 hover:text-emerald-600 transition-colors">Tentang Kami</a>
                <a href="#kontak" class="block text-gray-700 hover:text-emerald-600 transition-colors">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-4">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 animate-fadeIn">
                    <div class="inline-block">
                        <span class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-full text-sm font-semibold">
                            <i class="fas fa-star text-yellow-500"></i> Pesantren Terpercaya
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-bold text-gray-800 leading-tight">
                        Menggapai <span class="bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">Ridho Allah</span> dengan Ilmu
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Bergabunglah dengan kami dalam perjalanan menuntut ilmu agama dan mengembangkan karakter Islami di era modern.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-user-plus mr-2"></i> Daftar Sekarang
                        </button>
                        <button class="bg-white text-emerald-600 px-8 py-4 rounded-xl font-semibold border-2 border-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                            <i class="fas fa-play-circle mr-2"></i> Lihat Video
                        </button>
                    </div>
                    <div class="flex items-center space-x-8 pt-4">
                        <div>
                            <h4 class="text-3xl font-bold text-emerald-600">500+</h4>
                            <p class="text-gray-600">Santri Aktif</p>
                        </div>
                        <div>
                            <h4 class="text-3xl font-bold text-emerald-600">20+</h4>
                            <p class="text-gray-600">Ustadz Berpengalaman</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-emerald-400 to-teal-400 rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-transform duration-300">
                        <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?w=800" alt="Santri" class="rounded-2xl shadow-lg w-full h-96 object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl">
                        <div class="flex items-center space-x-3">
                            <div class="bg-emerald-100 p-3 rounded-xl">
                                <i class="fas fa-quran text-emerald-600 text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">Kurikulum</p>
                                <p class="font-bold text-gray-800">Tahfidz & Kitab</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 px-4 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Keunggulan Kami</h3>
                <p class="text-gray-600 text-lg">Fasilitas dan program unggulan untuk santri</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-8 rounded-2xl hover:shadow-xl transition-shadow duration-300 group">
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-book-quran text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Tahfidz Al-Qur'an</h4>
                    <p class="text-gray-600">Program menghafal Al-Qur'an dengan metode terbukti efektif dan bimbingan ustadz berpengalaman.</p>
                </div>
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-8 rounded-2xl hover:shadow-xl transition-shadow duration-300 group">
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-laptop text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Teknologi Modern</h4>
                    <p class="text-gray-600">Fasilitas IT lengkap untuk mendukung pembelajaran di era digital dengan tetap berpegang pada nilai Islam.</p>
                </div>
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-8 rounded-2xl hover:shadow-xl transition-shadow duration-300 group">
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Asrama Nyaman</h4>
                    <p class="text-gray-600">Asrama yang bersih, nyaman, dan aman dengan pengawasan 24 jam untuk kenyamanan santri.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-20 px-4 bg-gradient-to-br from-emerald-600 to-teal-600 text-white">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=800" alt="Gedung Pesantren" class="rounded-2xl shadow-2xl">
                </div>
                <div class="space-y-6">
                    <h3 class="text-4xl font-bold">Tentang Kami</h3>
                    <p class="text-emerald-50 text-lg leading-relaxed">
                        Pondok Pesantren Al-Hikmah adalah lembaga pendidikan Islam modern yang menggabungkan pembelajaran kitab klasik dengan pendidikan formal dan teknologi terkini.
                    </p>
                    <p class="text-emerald-50 text-lg leading-relaxed">
                        Didirikan sejak 1995, kami telah melahirkan ribuan alumni yang berkontribusi di berbagai bidang dengan tetap memegang teguh nilai-nilai Islam.
                    </p>
                    <div class="grid grid-cols-2 gap-6 pt-6">
                        <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <h5 class="text-3xl font-bold mb-2">28+</h5>
                            <p class="text-emerald-100">Tahun Berpengalaman</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <h5 class="text-3xl font-bold mb-2">5000+</h5>
                            <p class="text-emerald-100">Alumni Sukses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-20 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h3>
                <p class="text-gray-600 text-lg">Silakan hubungi kami untuk informasi lebih lanjut</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 bg-gradient-to-br from-emerald-50 to-teal-50 p-6 rounded-xl">
                        <div class="bg-emerald-600 p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-800 mb-2">Alamat</h5>
                            <p class="text-gray-600">Jl. Pesantren No. 123, Jakarta Selatan, DKI Jakarta 12345</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-gradient-to-br from-emerald-50 to-teal-50 p-6 rounded-xl">
                        <div class="bg-emerald-600 p-3 rounded-lg">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-800 mb-2">Telepon</h5>
                            <p class="text-gray-600">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-gradient-to-br from-emerald-50 to-teal-50 p-6 rounded-xl">
                        <div class="bg-emerald-600 p-3 rounded-lg">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-800 mb-2">Email</h5>
                            <p class="text-gray-600">info@alhikmah.sch.id</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 pt-4">
                        <a href="#" class="bg-emerald-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-emerald-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-emerald-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <form class="space-y-4">
                    <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-emerald-500 focus:outline-none transition-colors">
                    <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-emerald-500 focus:outline-none transition-colors">
                    <input type="tel" placeholder="No. Telepon" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-emerald-500 focus:outline-none transition-colors">
                    <textarea rows="4" placeholder="Pesan Anda" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-emerald-500 focus:outline-none transition-colors"></textarea>
                    <button type="submit" class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 text-white py-4 rounded-xl font-semibold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 px-4">
        <div class="container mx-auto text-center">
            <div class="flex items-center justify-center space-x-3 mb-4">
                <div class="bg-gradient-to-br from-emerald-600 to-teal-600 p-2 rounded-lg">
                    <i class="fas fa-mosque text-white text-xl"></i>
                </div>
                <h4 class="text-2xl font-bold text-white">Al-Hikmah</h4>
            </div>
            <p class="mb-6">Pondok Pesantren Modern dengan pendidikan berkualitas</p>
            <p class="text-gray-500">© 2024 Pondok Pesantren Al-Hikmah. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-xl');
            } else {
                nav.classList.remove('shadow-xl');
            }
        });
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</body>
</html>