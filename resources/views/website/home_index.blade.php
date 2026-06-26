@extends('website.layouts.finance_design')

@section('title', ($ws->name ?? "Land & Finance") . " — Home")

@section('content')

    <!-- Hero Slider -->
    <section class="hero-slider">
        <div class="slider-wrapper">
            <div class="slider-slide"><img src="{{ asset('finance_project/images/Gulshan.jpg') }}" alt="Gulshan"></div>
            <div class="slider-slide"><img src="{{ asset('finance_project/images/Mirpur-01.jpg') }}" alt="Mirpur"></div>
            <div class="slider-slide"><img src="{{ asset('finance_project/images/1777280963852957.jpg') }}" alt="Property"></div>
            <div class="slider-slide"><img src="{{ asset('finance_project/images/Baridhara.jpg') }}" alt="Baridhara"></div>
        </div>
        <button class="slider-btn slider-prev" aria-label="Previous">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg>
        </button>
        <button class="slider-btn slider-next" aria-label="Next">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg>
        </button>
        <div class="slider-pagination">
            <button class="slider-dot active" aria-label="Slide 1"></button>
            <button class="slider-dot" aria-label="Slide 2"></button>
            <button class="slider-dot" aria-label="Slide 3"></button>
            <button class="slider-dot" aria-label="Slide 4"></button>
        </div>
    </section>

    <!-- Featured Projects Heading -->
    <div class="section-heading">
        <h2>Featured Projects</h2>
    </div>

    <!-- Featured Projects Wrapper -->
    <div class="featured-wrapper">
        <div class="featured-sidebar">
            <div class="sidebar-box">
                <img src="{{ asset('finance_project/images/Adds-3.gif') }}" alt="Advertisement">
            </div>
            <div class="sidebar-box offer-box">
                <img src="{{ asset('finance_project/images/Offer-3-512x1024-1.jpg') }}" alt="Offer">
            </div>
        </div>
        <div class="featured-main">
            <section class="flex-property-section">
                <div class="flex-property-grid">

                    @php
                        $designProperties = [
                            [
                                'img' => 'https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-abason-project.jpg',
                                'ribbon' => 'RENT', 'count' => '1/5', 'cat' => 'Land', 'deal' => 'Sale',
                                'price' => 'BDT 1,99,99999', 'title' => '3 Katha land for sale',
                                'location' => 'Gulshan 2, Dhaka, Bangladesh',
                                'f1' => '1405 Sqft', 'f2' => '1 Owner', 'f3' => '11 Floors',
                                'logo' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/7322/6f3feb1108738a56d7e3c4ae32409cd5.jpg',
                                'company' => 'ACME Development',
                            ],
                            [
                                'img' => 'https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-land-project-overview.webp',
                                'ribbon' => 'RENT', 'count' => '1/5', 'cat' => 'Land', 'deal' => 'RENT',
                                'price' => 'BDT 1,99,999 / Month', 'title' => '7 Katha Land',
                                'location' => 'Gulshan 2, Dhaka, Bangladesh',
                                'f1' => '1 Parking', 'f2' => '1 Living', 'f3' => '11 Floors',
                                'logo' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/886/d87a7fe074ef2fe207aa46133ba60c31.jpg',
                                'company' => 'Scion Asset Developers',
                            ],
                            [
                                'img' => 'https://propertymanagementbd.com/wp-content/uploads/2026/05/shornali-abashon-plot.jpg',
                                'ribbon' => 'SELL', 'count' => '1/7', 'cat' => 'Land', 'deal' => 'SALE',
                                'price' => 'BDT 457,99999', 'title' => 'Butifull Land for sale',
                                'location' => 'Bashundhara R/A, Dhaka',
                                'f1' => '1305 sqft', 'f2' => '1 Living', 'f3' => '8 Floors',
                                'logo' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg',
                                'company' => 'Green Land Development',
                            ],
                            [
                                'img' => 'https://propertymanagementbd.com/wp-content/uploads/2026/05/shornali-abashon-plot-in-dhaka.jpg',
                                'ribbon' => 'SELL', 'count' => '1/7', 'cat' => 'Land', 'deal' => 'SALE',
                                'price' => 'BDT 47,99999', 'title' => 'Semi Furnished Land For Sale',
                                'location' => 'Bashundhara R/A, Dhaka',
                                'f1' => '1605 Sqft', 'f2' => '1 Living', 'f3' => '8 Floors',
                                'logo' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg',
                                'company' => 'Green Land Development',
                            ],
                            [
                                'img' => 'https://propertymanagementbd.com/wp-content/uploads/2026/05/leading-land-developer-company.webp',
                                'ribbon' => 'CUSTOM', 'count' => '1/9', 'cat' => 'PENTHOUSE', 'deal' => 'LUXURY',
                                'price' => 'BDT 65,999 / Month', 'title' => 'Spacious Brand New Penthouse Apartment',
                                'location' => 'Uttara Sector 7, Dhaka',
                                'f1' => '2 Parking', 'f2' => '2 Living', 'f3' => '15 Floors',
                                'logo' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg',
                                'company' => 'Green Land Development',
                            ],
                        ];
                    @endphp

                    @foreach($designProperties as $p)
                    <div class="flex-property-card">
                        <div class="flex-property-image">
                            <img src="{{ $p['img'] }}" alt="Property">
                            <div class="flex-featured">FEATURED</div>
                            <div class="flex-ribbon">{{ $p['ribbon'] }}</div>
                            <div class="flex-count">{{ $p['count'] }}</div>
                            <div class="flex-icons">
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                        <div class="flex-property-content">
                            <div class="flex-tags">
                                <div class="flex-tag flex-blue">{{ $p['cat'] }}</div>
                                <div class="flex-tag flex-orange">{{ $p['deal'] }}</div>
                            </div>
                            <div class="flex-price">{{ $p['price'] }}</div>
                            <div class="flex-title">{{ $p['title'] }}</div>
                            <div class="flex-location"><i class="fa-solid fa-location-dot"></i> {{ $p['location'] }}</div>
                            <div class="flex-features">
                                <div><i class="fa-solid fa-square-parking"></i> {{ $p['f1'] }}</div>
                                <div><i class="fa-solid fa-couch"></i> {{ $p['f2'] }}</div>
                                <div><i class="fa-solid fa-building"></i> {{ $p['f3'] }}</div>
                            </div>
                            <div class="flex-footer">
                                <img src="{{ $p['logo'] }}" alt="{{ $p['company'] }}">
                                <div class="flex-company">{{ $p['company'] }}</div>
                            </div>
                            <a href="{{ url('/properties') }}" class="flex-btn">VIEW DETAILS</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
    </div>

    <!-- View All Projects Button -->
    <div class="view-all-section">
        <a href="{{ url('/properties') }}" class="view-all-btn">View All Projects</a>
    </div>

    <!-- Land Wanted -->
    <section class="land-wanted-section">
        <h2>Land Wanted</h2>
    </section>

    <!-- Our Clients Heading -->
    <div class="section-heading">
        <h2>Our Clients</h2>
    </div>

    <!-- Clients Section -->
    <section class="client-section">
        <div class="client-container">
            @php
                $designClients = [
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/11799/ea5417cc3842eeef09aa84987708f438.jpg', 'name' => 'Ryan Property Ltd.'],
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/1583/09e56810066bf295c635cf2d3ad25f19.jpg', 'name' => 'Bhiya Housing'],
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/13342/f3e2a69e46b6368eae3d1ff9cf38c4cc.jpg', 'name' => 'Bestrome Properties'],
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/1585/e2e194e509b814ab6f46a48324e4524a.jpg', 'name' => 'Japasty Company'],
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/7371/e9d4b059c6d165d957287cca52477b18.jpg', 'name' => 'Kirti Holdings'],
                    ['img' => 'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/150X150/12988/7b39f6859b8e62a1cb143a6c7c1c4ef4.jpg', 'name' => 'Green Land Developments'],
                ];
            @endphp
            @foreach($designClients as $c)
            <a href="#" target="_blank" class="client-card">
                <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}">
                <div class="client-name">{{ $c['name'] }}</div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Membership Section -->
    <section class="membership-section">
        <div class="membership-container">

            <div class="membership-content">
                <div class="membership-subtitle">Join With Us</div>
                <h2 class="membership-title">Become our <span>partner</span></h2>
                <p class="membership-text">Become a valued member of our community and enjoy exclusive opportunities, premium services, priority support, and special benefits designed to help you grow faster and smarter.</p>
                <div class="membership-list">
                    <div class="membership-item">
                        <i>&#10003;</i>
                        Exclusive member-only benefits &amp; offers
                    </div>
                    <div class="membership-item">
                        <i>&#10003;</i>
                        Priority customer support anytime
                    </div>
                    <div class="membership-item">
                        <i>&#10003;</i>
                        Access to premium services &amp; updates
                    </div>
                    <div class="membership-item">
                        <i>&#10003;</i>
                        Trusted community &amp; business networking
                    </div>
                </div>
            </div>

            <div class="membership-form">
                <form id="membership-form" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="member-name">Name *</label>
                        <input type="text" id="member-name" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="member-email">Email Address *</label>
                        <input type="email" id="member-email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <label for="member-phone">Phone Number</label>
                        <input type="tel" id="member-phone" name="phone" placeholder="Your phone">
                    </div>
                    <div class="form-group">
                        <label for="member-message">Your Message</label>
                        <textarea id="member-message" name="message" placeholder="Write your message..."></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>

        </div>
    </section>

@endsection
