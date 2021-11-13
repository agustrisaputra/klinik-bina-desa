<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Klinik Bina Desa</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Karangasem" width="40" height="40"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-th"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('pengguna') ? 'active' : '' }}">
                <a href="{{ route('pengguna') }}" class="nav-link"><i class="fas fa-users"></i><span>Pengguna</span></a>
            </li>
            <li class="menu-header">Kelola Laporan</li>
            <li class="nav-item {{ request()->routeIs('pengaduan') ? 'active' : '' }}">
                <a href="{{ route('pengaduan') }}" class="nav-link"><i class="fas fa-bullhorn"></i><span>Pengaduan Masalah</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('konsultasi') ? 'active' : '' }}">
                <a href="{{ route('konsultasi') }}" class="nav-link"><i class="fas fa-broadcast-tower"></i></i><span>Konsultasi Tatap Muka</span></a>
            </li>
            {{-- <li class="menu-header">Kelola Data Pendukung</li>
            <li class="nav-item dropdown">
                <a href="pengaduan.php" class="nav-link"><i class="fas fa-cogs"></i></i><span>List Desa</span></a>
                <a href="konsultasi.php" class="nav-link"><i class="fas fa-cogs"></i></i></i><span>List Bidang</span></a>
                <a href="konsultasi.php" class="nav-link"><i class="fas fa-cogs"></i></i></i><span>List Jabatan</span></a>
            </li> --}}
        </ul>
    </aside>
</div>
