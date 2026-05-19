 <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex items-center py-3 gap-3">

                <!-- Logo -->
                <a href="#home" class="flex items-center gap-2 shrink-0">
                    <div class="bg-gradient-to-br from-emerald-600 to-teal-600 p-2 rounded-lg">
                        <i class="fas fa-mosque text-white text-lg"></i>
                    </div>
                    <div class="leading-tight">
                        <div class="text-sm font-bold text-emerald-800">Daar Al-Ilmi EMIISc</div>
                        <div class="text-xs text-gray-500 whitespace-nowrap">Pondok Pesantren Modern</div>
                    </div>
                </a>

                <div class="hidden md:flex items-center gap-0.5 flex-1 overflow-x-auto scrollbar-none">
                    <a href="{{ route('home') }}"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-base shrink-0">
                        <i class="fas fa-home"></i>
                    </a>
                    <a href="#hubungi"
                        class="px-2.5 py-2 text-gray-400 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Hubungi
                    </a>
                    <a href="#brosur"
                        class="px-2.5 py-2 text-blue-900 hover:bg-emerald-50 rounded transition-colors text-xs font-bold shrink-0 whitespace-nowrap">
                        BROSUR
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Tentang Kami
                    </a>
                    <a href="{{route('layanan')}}"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Layanan
                    </a>
                    <a href="#class"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Class &amp; Groups
                    </a>
                    <a href="#event"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Event
                    </a>
                    <a href="#news"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        News &amp; Info
                    </a>
                    <a href="#daftar"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Daftar
                    </a>
                    <a href="#modul"
                        class="px-2.5 py-2 text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded transition-colors text-xs font-semibold shrink-0 whitespace-nowrap">
                        Modul
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden ml-auto text-gray-700 shrink-0">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-3 space-y-0.5 border-t border-gray-100 pt-2">
                <a href="#home"
                    class="flex items-center gap-2 px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">
                    <i class="fas fa-home w-4"></i> Home
                </a>
                <a href="#hubungi"
                    class="block px-3 py-2 text-gray-400 hover:bg-emerald-50 rounded text-sm font-semibold">Hubungi</a>
                <a href="#brosur"
                    class="block px-3 py-2 text-blue-900 hover:bg-emerald-50 rounded text-sm font-bold">BROSUR</a>
                <a href="#tentang"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Tentang
                    Kami</a>
                <a href="#layanan"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Layanan</a>
                <a href="#class"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Class &amp;
                    Groups</a>
                <a href="#event"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Event</a>
                <a href="#news"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">News &amp;
                    Info</a>
                <a href="#daftar"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Daftar</a>
                <a href="#modul"
                    class="block px-3 py-2 text-gray-700 hover:bg-emerald-50 rounded text-sm font-semibold">Modul</a>
            </div>
        </div>
    </nav>