<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
        @yield('title')
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-D8X4MXZ0K8"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-D8X4MXZ0K8');
        </script>
 
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="../img/favicon.png">

        <!-- All css here -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    </head>

    <body>

        <!--  ====== header-area-start=======================================  -->
        <header>
            @include('layouts.inc.frontnavbar')
        </header>
        <!--  header-area-end  -->
    
        <!--  ====== header extra info start================================== -->
        <!-- side-mobile-menu start -->
        @include('layouts.inc.sidem')
        <div class="body-overlay"></div>
        <!-- header extra info end  -->

        <main>

            @yield('content')

        </main>
        
        <!-- ====== footer-area-start ============================================ -->
        <footer> 
            @include('layouts.inc.frontfooter')
        </footer>

        <!-- back top -->
        <div class="scroll-up" id="scroll">
            <a href="#" class="theme-bg white d-block text-center position-fixed mr-10">
                <span class=""><i class="fa-solid fa-angle-up"></i></span>
            </a>
        </div>

        <!-- All js here -->
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-k162TE_fx0R7EAmE"></script>

        <script src="https://kit.fontawesome.com/aa174d98f2.js" crossorigin="anonymous"></script>

        <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>

        <!-- <script src="js/vendor/jquery-3.6.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" ></script>

        <script src="{{ asset('frontend/js/jquery.inputarrow.js') }}"></script>

        <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/product-list",
            success: function (response) {
                startAutoComplete(response);
            }
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
              source: availableTags
            });
        }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')
    </body>
</html>