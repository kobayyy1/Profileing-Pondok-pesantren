@extends('layouts.app')

    <body class="bg-gradient-to-br from-emerald-50 to-teal-50">
       @include('layouts.navbar')

        <script>
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.toggle('hidden');
            });
        </script>

        <!-- Section -->
        <section id="galeri" class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto">

                <!-- Grid 8 Gambar -->
                <div class="flex flex-col gap-6 max-w-5xl mx-auto">

                    <!-- Gambar 1 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero1.png') }}" alt="Galeri 1"
                            class="w-full h-auto block">
                    </div>


                    <!-- Gambar 2 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero2.png') }}" alt="Galeri 2"
                            class="w-full h-[480px] object-cover object-center block">
                    </div>

                    <!-- Gambar 3 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero3.png') }}" alt="Galeri 3"
                            class="w-full h-auto block">
                    </div>

                    <!-- Gambar 4 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/santri30.png') }}" alt="Galeri 4"
                            class="w-full h-auto block">
                    </div>

                    <!-- Gambar 5 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero5.png') }}" alt="Galeri 5"
                            class="w-full h-auto block">
                    </div>

                    <!-- Gambar 6 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero6.png') }}" alt="Galeri 6"
                            class="w-full h-auto block">
                    </div>

                    <!-- Gambar 7 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero7.png') }}" alt="Galeri 7"
                            class="w-full h-auto block">
                    </div>

                    <!-- Gambar 8 -->
                    <div class="w-full overflow-hidden rounded-2xl shadow-md">
                        <img src="{{ asset('images/banner1/hero8.png') }}" alt="Galeri 8"
                            class="w-full h-auto block">
                    </div>
                </div>
            </div>
        </section>
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
</div>
