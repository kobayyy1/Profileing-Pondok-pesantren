<nav class="p-4 space-y-1">
    <!-- Menu Dashboard -->
    <a href="{{ route('admin.dashboard') }}"
        class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-blue-900/50 text-white font-bold' : 'text-blue-200 hover:bg-blue-900/30 hover:text-white' }}">
        <i
            class="fas fa-tachometer-alt w-4 text-center {{ request()->routeIs('admin.dashboard') ? 'text-red-500' : 'text-blue-400' }}"></i>
        Dashboard
    </a>

    <!-- Menu Data Santri (Otomatis Aktif di Index, Tambah, dan Edit) -->
    <a href="{{ route('admin.santri.index') }}"
        class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs transition-colors {{ request()->routeIs('admin.santri.*') ? 'bg-blue-900/50 text-white font-bold' : 'text-blue-200 hover:bg-blue-900/30 hover:text-white' }}">
        <i
            class="fas fa-user-graduate w-4 text-center {{ request()->routeIs('admin.santri.*') ? 'text-red-500' : 'text-blue-400' }}"></i>
        Data Santri
    </a>

    <!-- Menu Data Ustadz (Otomatis Aktif di Index dan Tambah) -->
    <a href="{{ route('admin.ustadz.index') }}"
        class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs transition-colors {{ request()->routeIs('admin.ustadz.*') ? 'bg-blue-900/50 text-white font-bold' : 'text-blue-200 hover:bg-blue-900/30 hover:text-white' }}">
        <i
            class="fas fa-chalkboard-teacher w-4 text-center {{ request()->routeIs('admin.ustadz.*') ? 'text-red-500' : 'text-blue-400' }}"></i>
        Data Ustadz
    </a>
</nav>
