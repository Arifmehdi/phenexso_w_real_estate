<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords', 'advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor')">
    <meta name="description" content="@yield('description', 'Home & Finance Intl Ltd. is a real estate company that provides a wide range of services to clients looking to buy, sell, or rent properties.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="CreativeLayers" content="ATFN">
    <title>@yield('title', "Home & Finance Int'l Ltd.")</title>
    <link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('css')
    <style>
        /* Sticky nav clean modern style */
        header.header-nav.stricky-fixed {
            background-color: #ffffff !important;
            box-shadow: 0 2px 16px rgba(0,0,0,0.08) !important;
            border-bottom: 2px solid #ff5a5f !important;
            animation: hf-nav-drop 0.3s ease forwards !important;
        }
        @keyframes hf-nav-drop {
            from { transform: translateY(-100%); opacity: 0; }
            to   { transform: translateY(0);    opacity: 1; }
        }
        header.header-nav.stricky-fixed nav {
            padding-top: 4px;
            padding-bottom: 4px;
        }
        header.header-nav.stricky-fixed .ace-responsive-menu > li > a {
            color: #222 !important;
        }
        header.header-nav.stricky-fixed .ace-responsive-menu > li > a:hover,
        header.header-nav.stricky-fixed .ace-responsive-menu > li.active > a {
            color: #ff5a5f !important;
        }
        header.header-nav.stricky-fixed .navbar_brand {
            margin-top: 8px !important;
        }
    </style>
</head>
<body class="maxw1600 m0a">
    <div class="wrapper">
        <!-- Custom Preloader -->
        <div id="hf-preloader">
            <div class="hf-preloader-inner">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="Loading..." class="hf-preloader-logo">
                <div class="hf-preloader-bar"><div class="hf-preloader-progress"></div></div>
            </div>
        </div>
        <style>
            #hf-preloader {
                position: fixed;
                top: 0; left: 0;
                width: 100%; height: 100%;
                background: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 99999;
                transition: opacity 0.4s ease;
            }
            #hf-preloader.hf-hidden {
                opacity: 0;
                pointer-events: none;
            }
            .hf-preloader-inner {
                text-align: center;
            }
            .hf-preloader-logo {
                max-width: 160px;
                margin-bottom: 20px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .hf-preloader-bar {
                width: 160px;
                height: 4px;
                background: #e8e8e8;
                border-radius: 4px;
                overflow: hidden;
                margin: 0 auto;
            }
            .hf-preloader-progress {
                height: 100%;
                width: 40%;
                background: #e8a020;
                border-radius: 4px;
                animation: hf-slide 1.2s ease-in-out infinite;
            }
            @keyframes hf-slide {
                0%   { transform: translateX(-100%); }
                100% { transform: translateX(400%); }
            }
        </style>
        <script>
            window.addEventListener('load', function() {
                setTimeout(function() {
                    var el = document.getElementById('hf-preloader');
                    if (el) {
                        el.classList.add('hf-hidden');
                        setTimeout(function() { el.style.display = 'none'; }, 450);
                    }
                    // Re-trigger owlCarousel autoplay after preloader hides
                    if (window.jQuery) {
                        var $ = window.jQuery;
                        var $slider = $('.feature_property_home3_slider');
                        if ($slider.length && $slider.data('owl.carousel')) {
                            $slider.trigger('play.owl.autoplay', [3000]);
                        } else if ($slider.length && !$slider.data('owl.carousel')) {
                            $slider.owlCarousel({
                                loop: $slider.children().length >= 3,
                                margin: 25,
                                dots: false,
                                nav: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                smartSpeed: 800,
                                navText: ['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],
                                responsive: {
                                    0:    { items: 1 },
                                    520:  { items: 2 },
                                    992:  { items: 3 },
                                    1200: { items: 4 }
                                }
                            });
                        }
                    }
                }, 1000);
            });
        </script>
        <!-- End Custom Preloader -->
        @include('website.layouts.home_finance_header')
        <main>
            @yield('content')
        </main>
        @include('website.layouts.home_finance_footer')
    </div>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/ace-responsive-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/isotop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/pricing-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/script.js') }}"></script>
    @stack('js')
</body>
</html>
