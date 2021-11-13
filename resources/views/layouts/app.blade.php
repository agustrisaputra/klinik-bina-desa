<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard | Klinik Bina Desa</title>

        @include('layouts.header')

    </head>
    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                @include('layouts.navbar')
                @include('layouts.sidebar')

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        @isset($header_content)
                            <div class="section-header">
                                {{ $header_content }}
                            </div>
                        @endisset

                        {{ $slot }}
                    </section>
                </div>
            </div>
        </div>

        @include('layouts.script')
    </body>
</html>
