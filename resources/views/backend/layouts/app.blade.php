<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('asset/backend/assets/media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('asset/backend/assets/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/backend/assets/media/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick-theme.css')}}">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('asset/backend/assets/css/codebase.min.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    	@stack('css')
        <!-- Page Container -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        @include('backend.layouts.sidebar')
        @include('backend.layouts.header')
        @include('backend.layouts.content')
        @yield('content')
        @include('backend.layouts.footer')
        </div>
        <!-- END Page Container -->
        @include('backend.layouts.popup')
        <script src="{{ asset('asset/backend/assets/js/codebase.core.min.js')}}"></script>
        <script src="{{ asset('asset/backend/assets/js/codebase.app.min.js')}}"></script>
        <!-- Page JS Plugins -->
        <script src="{{ asset('asset/backend/assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <!-- Page JS Code -->
        <script src="{{ asset('asset/backend/assets/js/pages/be_pages_dashboard.min.js')}}"></script>
        @yield('script')
    </body>
</html>