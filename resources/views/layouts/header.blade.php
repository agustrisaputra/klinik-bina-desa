<link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/stisla/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/stisla/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/stisla/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/stisla/css/style.css?v=20200801') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.css">

@if (isset($style))
    {{ $style }}
@endif
