<nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex items-center py-3 gap-3">

            <a href="#home" class="flex items-center gap-2 shrink-0">
                <div
                    class="bg-gradient-to-br from-blue-600 to-indigo-600 p-2 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('images/masjid.png') }}" alt="Logo Masjid" class="w-6 h-6 object-contain">
                </div>
                <div class="leading-tight">
                    <div class="text-sm font-bold text-blue-900">Daar Al-Ilmi EMIISc</div>
                    <div class="text-xs text-gray-500 whitespace-nowrap">Pondok Pesantren Modern</div>
                </div>
            </a>

            <div id="desktopMenu" class="hidden md:flex items-center gap-0.5 flex-1 overflow-x-auto scrollbar-none">
                <a href="{{ route('home') }}" data-route="home"
                    class="nav-link px-2.5 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded transition-colors text-base shrink-0">
                    <i class="fas fa-home"></i>
                </a>
                <a href="{{ route('hubungi') }}" data-route="hubungi"
                    class="nav-link px-2.5 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                    Hubungi
                </a>
                <a href="{{ route('about') }}" data-route="about"
                    class="nav-link px-2.5 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                    Tentang Kami
                </a>
                <a href="{{ route('layanan') }}" data-route="layanan"
                    class="nav-link px-2.5 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                    Layanan
                </a>
                <a href="{{ route('daftar') }}" data-route="daftar"
                    class="nav-link px-2.5 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                    Daftar
                </a>
            </div>

            <div class="hidden md:block shrink-0">
                @guest
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 bg-blue-900 hover:bg-blue-800 text-white text-xs font-bold rounded-lg transition-colors shadow-md shadow-blue-900/10 uppercase tracking-wider flex items-center gap-1">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                @else
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : '#' }}"
                        class="px-4 py-2 border border-blue-900 text-blue-900 hover:bg-blue-50 text-xs font-bold rounded-lg transition-colors uppercase tracking-wider flex items-center gap-1">
                        <i class="fas fa-user-circle"></i> Dashboard
                    </a>
                @endguest
            </div>

            <button id="mobileMenuBtn" class="md:hidden ml-auto text-gray-700 shrink-0">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden pb-3 space-y-0.5 border-t border-gray-100 pt-2">
            <a href="#home"
                class="mobile-nav-link flex items-center gap-2 px-3 py-2 text-gray-700 hover:bg-blue-50 rounded text-sm font-semibold">
                <i class="fas fa-home w-4"></i> Home
            </a>
            <a href="#hubungi"
                class="mobile-nav-link block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded text-sm font-semibold">Hubungi</a>

            <a href="#brosur"
                class="mobile-nav-link block px-3 py-2 text-red-600 hover:bg-red-50 rounded text-sm font-bold">BROSUR</a>

            <a href="#tentang"
                class="mobile-nav-link block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded text-sm font-semibold">Tentang
                Kami</a>
            <a href="#layanan"
                class="mobile-nav-link block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded text-sm font-semibold">Layanan</a>
            <a href="#daftar"
                class="mobile-nav-link block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded text-sm font-semibold mb-2">Daftar</a>

            <div class="pt-2 border-t border-gray-100 px-2">
                @guest
                    <a href="{{ route('login') }}"
                        class="block text-center bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider shadow-md">
                        <i class="fas fa-sign-in-alt mr-1"></i> Login Sistem
                    </a>
                @else
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : '#' }}"
                        class="block text-center border border-blue-900 text-blue-900 hover:bg-blue-50 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider">
                        <i class="fas fa-user-circle mr-1"></i> Masuk Dashboard
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        const activeClasses = ['text-blue-700', 'bg-blue-50', 'font-bold'];
        const baseClasses = ['text-gray-700'];
        const allLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');

        function resetActiveLinks() {
            allLinks.forEach(link => {
                link.classList.remove(...activeClasses);
                link.classList.add(...baseClasses);
            });
        }

        function setActive(link) {
            link.classList.remove(...baseClasses);
            link.classList.add(...activeClasses);
        }

        const currentUrl = window.location.href;
        let routeMatched = false;

        allLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('http') && currentUrl.includes(href)) {
                setActive(link);
                routeMatched = true;
            }
        });

        allLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    resetActiveLinks();
                    setActive(this);
                    if (mobileMenu) mobileMenu.classList.add('hidden');
                }
            });
        });

        if (!routeMatched && window.location.hash === '') {
            const homeLink = document.querySelector('[data-route="home"]');
            if (homeLink) setActive(homeLink);
        }
    });
</script>
