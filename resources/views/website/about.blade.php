@extends('website.layouts.finance_design')

@section('title', "About — " . ($ws->name ?? "Land & Finance"))

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>About Us</h1>
        <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; About</div>
    </section>

    <!-- Intro -->
    <section class="about-intro">
        <div class="about-text">
            <div class="about-subtitle">{{ $ws->name ?? 'Land & Finance' }}</div>
            <h2>Your Trusted Property Partner for Buying &amp; Selling Property</h2>
            <p>We are a trusted property management and real estate service provider in Bangladesh, dedicated to helping clients buy, sell, and manage properties with ease. With a strong network of verified buyers, sellers, and investors, we ensure every transaction is secure, transparent, and efficient.</p>
            <p>Our team combines local market expertise with modern strategies to deliver the best results. Whether you are looking to purchase your dream home, sell your property at the right price, or manage your real estate investment, we provide complete support at every step.</p>
        </div>
        <div class="about-image">
            <img src="{{ asset('finance_project/images/about-hero.jpg') }}" alt="Real estate purchase and property investment">
        </div>
    </section>

    <!-- Stats -->
    <section class="about-stats">
        <div class="about-stats-inner">
            <div class="stat-box">
                <div class="stat-number">2593+</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">254+</div>
                <div class="stat-label">Project Complete</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">2M+</div>
                <div class="stat-label">Registered Member</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">578</div>
                <div class="stat-label">Awards Winning Projects</div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="about-section">
        <div class="section-heading">
            <h2>Our Mission &amp; Vision</h2>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <h3>🚀 Our Mission</h3>
                <p>To simplify property buying, selling, and management in Bangladesh by providing transparent, reliable, and customer-focused real estate services. We aim to build trust and deliver value in every transaction.</p>
            </div>
            <div class="about-card">
                <h3>🌍 Our Vision</h3>
                <p>To become Bangladesh&rsquo;s most trusted and innovative property platform, connecting buyers and sellers through smart solutions, digital tools, and professional management services.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="about-section">
        <div class="section-heading">
            <h2>Why Choose Us</h2>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <h3>✔ Trusted Network</h3>
                <p>Verified buyers, sellers, and property listings across Bangladesh.</p>
            </div>
            <div class="about-card">
                <h3>💼 Professional Service</h3>
                <p>Experienced team handling buying, selling, and property management smoothly.</p>
            </div>
            <div class="about-card">
                <h3>⚡ Fast Transactions</h3>
                <p>Quick deal closing with proper documentation and legal assistance.</p>
            </div>
            <div class="about-card">
                <h3>📈 Market Expertise</h3>
                <p>Up-to-date property trends and pricing insights to get the best deals.</p>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="about-section">
        <div class="section-heading">
            <h2>Our Services</h2>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <h3>🏠 Property Buying</h3>
                <p>Find your dream home or land with verified listings and expert guidance.</p>
            </div>
            <div class="about-card">
                <h3>💰 Property Selling</h3>
                <p>Sell your property faster with our marketing, client network, and support.</p>
            </div>
            <div class="about-card">
                <h3>🔑 Property Management</h3>
                <p>We handle rent, tenants, maintenance, and full property care services.</p>
            </div>
            <div class="about-card">
                <h3>📊 Investment Consultancy</h3>
                <p>Get expert advice on profitable real estate investment opportunities.</p>
            </div>
        </div>
    </section>

@endsection
