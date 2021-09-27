<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Chabikathi – Seller</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Chabikathi – Anything At Anywhere">
    <meta property="og:site_name" content="Chabikathi">
    <meta property="og:description" content="Chabikathi – Anything At Anywhere">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick-theme.css')}}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('asset/backend/assets/css/codebase.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ asset('js/toastr.min.css') }}">
    <style type="text/css">
        .toggle-group .btn-default {
            background-color: #8a2a2a;
            border: none;
            color: #fff;
            font-weight: 800;
        }

        .toggle-group .btn-primary {
            background-color: #224022;
            border: none;
            font-weight: 800;
        }
    </style>
</head>

<body>
    @stack('css')
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        @include('seller.layouts.sidebar')
        @include('seller.layouts.header')
        @yield('content')
        @include('seller.layouts.footer')
    </div>
    <!-- END Page Container -->
    <script src="{{ asset('js/swal.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/codebase.core.min.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/codebase.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('asset/backend/assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/plugins/slick/slick.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('asset/backend/assets/js/pages/be_pages_dashboard.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('asset/backend/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('asset/backend/assets/js/pages/be_tables_datatables.min.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    {{-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> --}}
    {!! Toastr::message() !!}


    <script type="text/javascript">
        $(document).on("change","#shop",function(){
        var id=$(this).attr('data');
        if(this.checked){
            var holiday=1;
        }else{
            var holiday=0;
        }
        
        $.ajax({
            url: '/seller/holiday/'+id+'/'+holiday,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                toastr.success("Holiday Mood Change Successfully", "Success");
               console.log(response);
            }
 
        });
    
    });
    
    </script>
    @yield('script')
</body>

</html>