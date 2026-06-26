<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords', 'real estate, land, finance, property, dhaka, bangladesh')">
    <meta name="description" content="@yield('description', 'Land & Finance — building a secure future through trusted property investment.')">
    <title>@yield('title', $ws->name ?? "Land & Finance")</title>
    <link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('finance_project/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @stack('css')
</head>
<body>

    <!-- Preloader -->
    <div id="lf-preloader">
        <img src="{{ asset('finance_project/images/logo.jpg') }}" alt="{{ $ws->name ?? 'Land & Finance' }}">
    </div>

    <!-- Skip Link -->
    <a class="screen-reader-text" href="#content">Skip to content</a>

    <!-- Header -->
    <header class="site-header">
        <div class="header-inner">
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('finance_project/images/logo_.png') }}" alt="{{ $ws->name ?? 'Land & Finance' }}">
                </a>
            </div>

            <nav class="header-nav">
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ url('/properties') }}" class="{{ request()->is('properties*') ? 'active' : '' }}">Projects</a></li>
                    <li><a href="{{ route('news') }}" class="{{ request()->is('news*') ? 'active' : '' }}">Articles</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <div class="header-social">
                <a href="{{ $ws->facebook ?? '#' }}" target="_blank" aria-label="Facebook">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                </a>
                <a href="{{ $ws->linkedin ?? '#' }}" target="_blank" aria-label="LinkedIn">
                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                </a>
                <a href="{{ $ws->youtube ?? '#' }}" target="_blank" aria-label="YouTube">
                    <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                </a>
            </div>

            <a href="{{ route('login') }}" class="header-login" aria-label="Login">
                <i class="fa-regular fa-user"></i>
                <span>Login</span>
            </a>

            <button class="mobile-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Mobile Nav -->
    <div class="mobile-nav-overlay"></div>
    <nav class="mobile-nav">
        <button class="close-btn" aria-label="Close">&times;</button>
        <div class="mobile-logo">
            <img src="{{ asset('finance_project/images/logo_.png') }}" alt="{{ $ws->name ?? 'Land & Finance' }}">
        </div>
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ url('/properties') }}" class="{{ request()->is('properties*') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('news') }}" class="{{ request()->is('news*') ? 'active' : '' }}">Articles</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <div class="mobile-social">
            <a href="{{ $ws->facebook ?? '#' }}" target="_blank" aria-label="Facebook">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
            </a>
            <a href="{{ $ws->linkedin ?? '#' }}" target="_blank" aria-label="LinkedIn">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
            </a>
            <a href="{{ $ws->youtube ?? '#' }}" target="_blank" aria-label="YouTube">
                <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-main">
            <div>
                <div class="footer-logo">
                    <img src="{{ asset('finance_project/images/logo.jpg') }}" alt="{{ $ws->name ?? 'Land & Finance' }}">
                </div>
                <p class="footer-desc">Land &amp; Finance is more than just property investment — it is about building a secure future, creating valuable opportunities,</p>
            </div>
            <div></div>
            <div class="footer-col">
                <h3>Links</h3>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ url('/properties') }}">Projects</a>
                <a href="{{ route('news') }}">Articles</a>
            </div>
            <div class="footer-col">
                <h3>Support</h3>
                <p>Help Center</p>
                <p>FAQ</p>
                <a href="{{ route('contact') }}">Contact</a>
                <p>Community</p>
            </div>
            <div class="footer-col">
                <h3>Contacts</h3>
                <ul class="footer-contacts">
                    <li><i class="fa-solid fa-phone"></i> {{ $ws->phone ?? '01717XXXXXX' }}</li>
                    <li><i class="fa-solid fa-envelope"></i> {{ $ws->email ?? 'info@landfinance.com' }}</li>
                    <li><i class="fa-solid fa-location-dot"></i> {{ $ws->address ?? 'Dhaka, Bangladesh' }}</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} | {{ $ws->name ?? 'Land & Finance' }} all rights reserved | Developed by Phenexsoft
        </div>
    </footer>

    <!-- Scroll to Top -->
    <div id="ast-scroll-top" tabindex="0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="57 35.171 26 16.043" width="26" height="16.043">
            <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193Z" fill="currentColor"/>
        </svg>
    </div>

    <script src="{{ asset('finance_project/js/main.js') }}"></script>
    @stack('js')
</body>
</html>
