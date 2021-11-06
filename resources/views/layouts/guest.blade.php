<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Register &mdash; Stisla</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/stisla/modules/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stisla/modules/fontawesome.min.css') }}">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="{{ asset('assets/stisla/modules/selectric.css') }}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/stisla/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stisla/css/components.css') }}">
    </head>
    <body>
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                            <div class="login-brand">
                                <h1>Klinik Bina Desa</h1>
                                <!-- <img src="assets/stisla/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
                            </div>

                            <div class="card card-danger">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/stisla/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/popper.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/tooltip.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/moment.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>

        <!-- JS Libraies -->
        <script src="{{ asset('assets/stisla/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/auth-register.js') }}"></script>

        <!-- Template JS File -->
        <script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/stisla/js/custom.js') }}"></script>

        {{ $script }}
    </body>
</html>
