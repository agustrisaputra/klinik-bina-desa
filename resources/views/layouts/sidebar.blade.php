<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Klinik Bina Desa</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Karangasem" width="40" height="40"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-th"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('admin.pengguna') ? 'active' : '' }}">
                <a href="{{ route('admin.pengguna') }}" class="nav-link"><i class="fas fa-users"></i><span>Pengguna</span></a>
            </li>
            <li class="menu-header">Kelola Laporan</li>
            <li class="nav-item {{ request()->routeIs('admin.pengaduan') ? 'active' : '' }}">
                <a href="{{ route('admin.pengaduan') }}" class="nav-link"><i class="fas fa-bullhorn"></i><span>Pengaduan Masalah</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('admin.konsultasi') ? 'active' : '' }}">
                <a href="{{ route('admin.konsultasi') }}" class="nav-link"><i class="fas fa-broadcast-tower"></i></i><span>Konsultasi Tatap Muka</span></a>
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
