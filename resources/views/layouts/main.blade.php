<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="{{ asset('main/assets/vendor/jquery/jquery.min.js')}}"></script>
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/metisMenu/metisMenu.css')}}">
    <link rel="stylesheet"
        href="{{ asset('main/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendor/toastr/toastr.min.css')}}">
    <!-- bootsstrap table -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/main.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('image/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('image/favicon.png')}}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        @component('layouts/component/navbar',[])
        @endcomponent
        @component('layouts/component/sidebar',[])
        @endcomponent
        <div id="main-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- Javascript -->
    <script src="{{ asset('main/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/metisMenu/metisMenu.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js')}}"></script>
    <script src="{{ asset('main/assets/vendor/toastr/toastr.js')}}"></script>
    <script src="{{ asset('main/assets/scripts/common.js')}}"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
</body>

</html>