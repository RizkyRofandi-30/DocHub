<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Primary Meta Tags -->
        <title>DocHub</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Icon -->
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/brand/logo.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/brand/logo.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/brand/logo.png') }}">

        <!-- Sweet Alert -->
        <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

        <!-- Notyf -->
        <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">

        <!-- Volt CSS -->
        <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


        {{-- Vite --}}
        {{-- @vite('resources/css/volt.css', 'resources/js/app.js') --}}
    </head>

    <body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        @include('admin.template.response-sidebar')
        @include('admin.template.sidebar-link')
        <main class="content">
            @yield('navbar')
            <div class="row">
                @yield('single_content')
                <div class="col-12 col-xl-8">
                    <div class="row">
                        @yield('table_content')
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    @yield('vertical_content')
                </div>
            </div>
        </main>

        <!-- Core -->
        <script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
        <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Vendor JS -->
        <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

        <!-- Slider -->
        <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

        <!-- Smooth scroll -->
        <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

        <!-- Charts -->
        <script src="../../vendor/chartist/dist/chartist.min.js"></script>
        <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

        <!-- Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Sweet Alerts 2 -->
        <script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

        <!-- Moment JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

        <!-- Vanilla JS Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Notyf -->
        <script src="../../vendor/notyf/notyf.min.js"></script>

        <!-- Simplebar -->
        <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Volt JS -->
        <script src="../../assets/js/volt.js"></script>



    </body>

    </html>

</body>

</html>
