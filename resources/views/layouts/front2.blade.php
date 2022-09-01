<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @yield('meta')

    <!-- Title Page-->
    <title>
        @yield('title')
    </title>

    <!-- Icons font CSS-->
    <link href="{{ asset('frontend2/vendor/mdi-font/css/material-design-iconic-font.min.css')}} " rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/themify-font/themify-icons.css') }}" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="{{ asset('frontend2/css/poppins-font.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="{{ asset('frontend2/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('frontend2/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend2/vendor/revolution/css/layers.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend2/vendor/revolution/css/navigation.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend2/vendor/revolution/css/settings.css') }}" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="{{ asset('frontend2/css/main.min.css') }}" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="/frontend2/images/icon/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition js-preloader">
    <div class="page-wrapper">
        <!-- HEADER-->
        <header id="header">
            @include('layouts.inc2.frontheader')
            @include('layouts.inc2.frontsidem')
        </header>
        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            @yield('content2')
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <footer class="footer bg-parallax">
            @include('layouts.inc2.frontfooter')
        </footer>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('frontend2/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('frontend2/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('frontend2/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/matchHeight/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('frontend2/vendor/noUiSlider/nouislider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <!-- Config Revolution Slider-->
    <script type="text/javascript" src="{{ asset('frontend2/js/config-revolution.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('frontend2/js/global.js') }}"></script>

</body>

</html>
<!-- end document-->