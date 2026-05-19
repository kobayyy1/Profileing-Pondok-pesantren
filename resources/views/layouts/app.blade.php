<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Al-Hikmah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Footer  -->
    <footer class="bg-white border-t border-gray-200 pt-12 pb-6 px-4">
        <div class="container mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">

                <!-- Kolom 1 -->
                <div class="flex flex-col gap-5">
                    <!-- Logo -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('logo.png') }}" alt="PKBM Logo" class="w-14 h-14 object-contain">
                    </div>

                    <!-- Kontak -->
                    <div class="flex flex-col gap-3 text-sm text-gray-700">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-phone text-gray-600 text-sm"></i>
                            <span>085883037990</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i class="fas fa-map-marked-alt text-gray-600 text-sm mt-0.5"></i>
                            <span>Jl. Condet Raya Kav. Lingkungan 7 No. 27 Jakarta Timur</span>
                        </div>
                    </div>

                    <!-- Sosial Media -->
                    <div class="flex items-center gap-2 mt-2">
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 border border-gray-400 rounded flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="flex flex-col justify-start pt-1">
                    <div class="flex">
                        <input type="text" placeholder="Pencarian Berita ..."
                            class="w-full border border-gray-300 px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:border-gray-500">
                        <button class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2.5 transition-colors">
                            <i class="fas fa-search text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="flex flex-col gap-3">
                    <h5 class="text-base font-semibold text-gray-800 pb-2 border-b border-gray-300">Usefull Link
                    </h5>
                    <a href="#" class="text-sm text-gray-700 hover:text-gray-900 transition-colors">Hubungi
                        Kami</a>
                    <a href="#" class="text-sm text-gray-700 hover:text-gray-900 transition-colors">Index
                        Berita</a>
                    <a href="#" class="text-sm text-gray-700 hover:text-gray-900 transition-colors">Konsultasi
                        Online</a>
                </div>

                <!-- Kolom 4: Tag / Kategori -->
                <div class="flex flex-col gap-3">
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Teknologi</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Metropolitan</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Nasional</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Kesehatan</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-4 py-1.5 rounded hover:bg-gray-100 transition-colors">Islamic
                            Technopreneur</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Internasional</a>
                        <a href="#"
                            class="border border-gray-400 text-gray-700 text-xs px-3 py-1.5 rounded hover:bg-gray-100 transition-colors">Hukum</a>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="border-t border-gray-200 pt-5 flex justify-end">
                <p class="text-sm text-gray-500">Copyright &copy; PKBMRI.sch.id. 2024</p>
            </div>

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
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
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
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>

</body>

</html>
