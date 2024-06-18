<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="0y3-Trovolink" content="">

        <title> @yield('title') </title>

        <link href="https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icomoon-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

        <style>
            .main-header .header-upper .logo-outer {
                padding-top: 5px;
                padding-bottom: 5px;
            }
        </style>
        <!-- for page specific stylesheet -->
        @stack('styles')

    </head>

    <!-- page wrapper -->
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- main-header -->
            @include('layouts.header') 
            <!-- main-header end -->

            <!-- main-content -->
            @yield('content') 
            <!-- main-content end -->

            <!-- main-footer -->
            @include('layouts.footer')
            <!-- main-footer end -->
        </div>
        <!--End pagewrapper--> 


        <!-- jquery plugins -->
        <script src="{{ asset("assets/js/jquery.js") }}"></script>
        <script src="{{ asset("assets/js/popper.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery-ui.js") }}"></script>
        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.fancybox.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
        <script src="{{ asset("assets/js/owl.js") }}"></script>
        <script src="{{ asset("assets/js/paroller.js") }}"></script>
        <script src="{{ asset("assets/js/wow.js") }}"></script>
        <script src="{{ asset("assets/js/main.js") }}"></script>
        <script src="{{ asset("assets/js/nav-tool.js") }}"></script>
        <script src="{{ asset("assets/js/jquery-ui.js") }}"></script>
        <script src="{{ asset("assets/js/appear.js") }}"></script>
        

        <!-- main-js -->
        <script src="{{ asset("assets/js/script.js") }}"></script>

        <!--for page specific script-->
        @stack('scripts')
    </body><!-- End of .page_wrapper -->

</html>
