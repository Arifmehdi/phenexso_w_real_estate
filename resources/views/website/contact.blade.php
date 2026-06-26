@extends('website.layouts.finance_design')

@section('title', "Contact — " . ($ws->name ?? "Land & Finance"))

@section('keywords', 'contact, real estate, property, land, finance, address, phone, email')

@section('description', 'Get in touch with us. Send us an inquiry and we will get back to you as soon as possible.')

@push('css')
<style>
    .lf-alert {
        max-width: 1200px;
        margin: 25px auto -20px;
        padding: 14px 20px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
    }
    .lf-alert.success { background: #e7f7ec; color: #1e7e44; border: 1px solid #b6e3c4; }
    .lf-alert.error   { background: #fdecea; color: #b3261e; border: 1px solid #f5c2c0; }
    .lf-alert ul { margin: 6px 0 0; padding-left: 18px; font-weight: 500; }
</style>
@endpush

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>Contact</h1>
        <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Contact</div>
    </section>

    @if(session('success'))
        <div class="lf-alert success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="lf-alert error">
            Please check the form:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Contact Section -->
    <section class="contact-section">

        <div class="contact-info">
            <div class="contact-subtitle">Get In Touch</div>
            <h2>Contact With Us</h2>
            <p>Have a question about buying, selling, or managing your property? Reach out to our team and we will get back to you as soon as possible.</p>

            <div class="info-item">
                <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="info-text">
                    <h4>Our Location</h4>
                    <p>{{ $ws->contact_address ?? 'Dhaka, Bangladesh' }}</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="info-text">
                    <h4>Email Us</h4>
                    <p>{{ $ws->contact_email ?? 'Info@landfinance.com' }}</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="info-text">
                    <h4>Call Us</h4>
                    <p>{{ $ws->contact_mobile ?? '01717XXXXXXX' }}</p>
                </div>
            </div>
        </div>

        <div class="membership-form">
            <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="contact-name">Name *</label>
                    <input type="text" id="contact-name" name="name" placeholder="Your name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="contact-email">Email Address *</label>
                    <input type="email" id="contact-email" name="email" placeholder="Your email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="contact-phone">Phone Number</label>
                    <input type="tel" id="contact-phone" name="phone" placeholder="Your phone" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" name="message" placeholder="Write your message..." required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="submit-btn">Send</button>
            </form>
        </div>

    </section>

    <!-- Map -->
    <section class="contact-map">
        <iframe
            src="{{ $ws->iframe_map ?? 'https://www.google.com/maps?q=Dhaka,Bangladesh&output=embed' }}"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="{{ $ws->contact_address ?? 'Dhaka, Bangladesh' }}"></iframe>
    </section>

@endsection
