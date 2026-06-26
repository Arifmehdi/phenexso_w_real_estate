@extends('website.layouts.finance_design')

@php
    // $dynamic comes from the controller. true = use database data, false = show the static design.
    $useDynamic = ($dynamic ?? false) && !empty($property);

    $pdTitle    = $useDynamic ? ($property->name ?? 'Property')                  : '3 Katha Land For Sale';
    $pdLocation = $useDynamic ? ($property->address ?? 'Dhaka, Bangladesh')      : 'Gulshan 2, Dhaka, Bangladesh';
    $pdPrice    = $useDynamic ? 'BDT ' . number_format($property->price ?? 0)    : 'BDT 1,99,99,999';
    $pdStatus   = $useDynamic ? ('For ' . ucfirst($property->status ?? 'Sale'))  : 'For Sale';
    $pdType     = $useDynamic ? ucfirst($property->type ?? 'Land')               : 'Land';
    $pdArea     = $useDynamic ? (($property->sqft ?? 0) . ' Sqft')               : '1405 Sqft';
    $pdRef      = $useDynamic ? ('LF-PRJ-' . str_pad($property->id ?? 1, 3, '0', STR_PAD_LEFT)) : 'LF-PRJ-001';
@endphp

@section('title', $pdTitle . " — " . ($ws->name ?? "Land & Finance"))

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>Project Details</h1>
        <div class="breadcrumb">
            <a href="{{ url('/') }}">Home</a> &raquo;
            <a href="{{ url('/properties') }}">Projects</a> &raquo; {{ $pdTitle }}
        </div>
    </section>

    <!-- Detail Wrapper -->
    <div class="pd-wrapper">

        <!-- Main Column -->
        <div class="pd-main">

            <div class="pd-title-row">
                <div>
                    <h1>{{ $pdTitle }}</h1>
                    <div class="pd-location"><i class="fa-solid fa-location-dot"></i> {{ $pdLocation }}</div>
                </div>
                <div class="pd-price">{{ $pdPrice }} <span>{{ $pdStatus }}</span></div>
            </div>

            <!-- Gallery -->
            <div class="pd-gallery">
                <div class="pd-main-image">
                    <div class="pd-badges">
                        <span class="pd-badge">FEATURED</span>
                        <span class="pd-badge pd-badge-dark">{{ strtoupper($pdStatus) }}</span>
                    </div>
                    <img id="pd-main-img" src="https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-abason-project.jpg" alt="{{ $pdTitle }}">
                </div>
                <div class="pd-thumbs">
                    <img src="https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-abason-project.jpg" alt="View 1" onclick="document.getElementById('pd-main-img').src=this.src">
                    <img src="https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-land-project-overview.webp" alt="View 2" onclick="document.getElementById('pd-main-img').src=this.src">
                    <img src="https://propertymanagementbd.com/wp-content/uploads/2026/05/shornali-abashon-plot.jpg" alt="View 3" onclick="document.getElementById('pd-main-img').src=this.src">
                    <img src="https://propertymanagementbd.com/wp-content/uploads/2026/05/leading-land-developer-company.webp" alt="View 4" onclick="document.getElementById('pd-main-img').src=this.src">
                </div>
            </div>

            <!-- Overview -->
            <div class="pd-block">
                <h2>Overview</h2>
                @if($useDynamic && !empty($property->description))
                    <p>{{ $property->description }}</p>
                @else
                    <p>This premium 3 Katha land is located in the heart of Gulshan 2, one of Dhaka's most prestigious and well-connected neighborhoods. The plot is ideal for building a luxury residential or commercial project, offering excellent road access, secure surroundings, and proximity to schools, hospitals, and shopping centres.</p>
                    <p>With clean documentation, ready mutation, and a transparent ownership history, this property is a secure and profitable investment opportunity. Our team provides complete legal assistance and support throughout the entire buying process.</p>
                @endif
            </div>

            <!-- Property Details -->
            <div class="pd-block">
                <h2>Property Details</h2>
                <div class="pd-details-grid">
                    <div class="pd-detail-item"><span>Type</span><span>{{ $pdType }}</span></div>
                    <div class="pd-detail-item"><span>Status</span><span>{{ $pdStatus }}</span></div>
                    <div class="pd-detail-item"><span>Price</span><span>{{ $pdPrice }}</span></div>
                    <div class="pd-detail-item"><span>Area</span><span>{{ $pdArea }}</span></div>
                    <div class="pd-detail-item"><span>Floors Allowed</span><span>11 Floors</span></div>
                    <div class="pd-detail-item"><span>Ownership</span><span>1 Owner</span></div>
                    <div class="pd-detail-item"><span>Location</span><span>{{ $pdLocation }}</span></div>
                    <div class="pd-detail-item"><span>Reference</span><span>{{ $pdRef }}</span></div>
                </div>
            </div>

            <!-- Amenities -->
            <div class="pd-block">
                <h2>Features &amp; Amenities</h2>
                <ul class="pd-amenities">
                    <li><i class="fa-solid fa-circle-check"></i> Wide road frontage</li>
                    <li><i class="fa-solid fa-circle-check"></i> Clear documentation</li>
                    <li><i class="fa-solid fa-circle-check"></i> Ready mutation</li>
                    <li><i class="fa-solid fa-circle-check"></i> 24/7 security area</li>
                    <li><i class="fa-solid fa-circle-check"></i> Utility connections nearby</li>
                    <li><i class="fa-solid fa-circle-check"></i> Prime central location</li>
                    <li><i class="fa-solid fa-circle-check"></i> Suitable for high-rise</li>
                    <li><i class="fa-solid fa-circle-check"></i> Legal support included</li>
                </ul>
            </div>

        </div>

        <!-- Sidebar -->
        <aside class="pd-sidebar">

            <div class="pd-agent-card">
                <img src="https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/7322/6f3feb1108738a56d7e3c4ae32409cd5.jpg" alt="ACME Development">
                <h3>ACME Development</h3>
                <div class="pd-agent-role">Property Developer</div>
                <div class="pd-agent-contact"><i class="fa-solid fa-phone"></i> {{ $ws->phone ?? '01717XXXXXXX' }}</div>
                <div class="pd-agent-contact"><i class="fa-solid fa-envelope"></i> {{ $ws->email ?? 'Info@landfinance.com' }}</div>
            </div>

            <div class="membership-form">
                <h3 style="font-family:'Playfair Display',serif;font-size:22px;color:var(--dark);margin-bottom:18px;">Schedule a Visit</h3>
                <form id="inquiry-form" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pd-name">Name *</label>
                        <input type="text" id="pd-name" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="pd-email">Email Address *</label>
                        <input type="email" id="pd-email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <label for="pd-phone">Phone Number</label>
                        <input type="tel" id="pd-phone" name="phone" placeholder="Your phone">
                    </div>
                    <div class="form-group">
                        <label for="pd-message">Message</label>
                        <textarea id="pd-message" name="message" placeholder="I'm interested in this property...">{{ 'I am interested in ' . $pdTitle }}</textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Inquiry</button>
                </form>
            </div>

        </aside>

    </div>

@endsection

@push('js')
<script>
    (function () {
        var form = document.getElementById('inquiry-form');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var name = form.querySelector('[name="name"]').value;
                var email = form.querySelector('[name="email"]').value;
                if (!name || !email) {
                    alert('Please fill in required fields (Name and Email).');
                    return;
                }
                alert('Thank you! Your inquiry has been submitted.');
                form.reset();
            });
        }
    })();
</script>
@endpush
