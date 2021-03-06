<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Klinik Bina Desa</title>

	<!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/stisla/modules/selectric.css') }}">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/stisla/modules/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stisla/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
</head>
<body>
	<!-- Header -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid">
                    <span>Klinik Bina Desa</span>
                </a>
            </h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @if (Auth::guest())
                    <li><a class="nav-link scrollto" href="{{ route('login') }}"><b>Masuk</b></a></li>
                    <li><a class="nav-link scrollto btn" href="{{ route('register') }}"><b>DAFTAR</b></a></li>
                @else
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('KELUAR') }}
                        </x-dropdown-link>
                    </form>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>
	<!-- end header -->

    <!-- Hero section -->
	<section id="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h1>Klinik Bina Desa</h1>
						<h2>Layanan Konsultasi Pembinaan dan Pengawasan Penyelenggaraan Administrasi Pemerintahan Desa di Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Karangasem</h2>

                        @guest
						<div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" class="btn-get-started scrollto"><span>Ayo Konsultasi</span></a>
                        </div>
                        @endguest
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
					<img src="{{ asset('assets/img/bupati karangasem.png') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
	</section>
	<!-- end of section -->

	<!-- Main -->
	<main id="main">
        @if (Auth::check())
            @include('components.lapor')
        @else
            @include('components.about')
        @endif

		<!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h2><b>JUMLAH LAPORAN SEKARANG</b></h2>
                        <h1>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->
	</main>
	<!-- end main -->

	<!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">&copy; Copyright <strong><span>Klinik Bina Desa</span></strong></div>
        </div>
    </footer>
    <!-- End Footer -->

	<a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

	<!-- Vendor JS Files -->
    <script src="{{ asset('assets/stisla/modules/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/stisla/modules/selectric.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/modules/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/bootstrap-timepicker.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script>

	<!-- Template Main JS File -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/form.js') }}"></script>
</body>
</html>
