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
    <link href="{{ asset('home_finance/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('home_finance/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="{{ asset('home_finance/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home_finance/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home_finance/css/responsive.css') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('css')
</head>
<body class="maxw1600 m0a">
    <div class="wrapper">
        <div class="preloader"></div>
        @include('website.layouts.home_finance_header')
        <main>
            @yield('content')
        </main>
        @include('website.layouts.home_finance_footer')
    </div>
    <script type="text/javascript" src="{{ asset('home_finance/js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/ace-responsive-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/isotop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/pricing-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home_finance/js/script.js') }}"></script>
    @stack('js')
</body>
</html>
