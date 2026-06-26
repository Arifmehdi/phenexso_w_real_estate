@extends('website.layouts.finance_design')

@section('title', "Projects — " . ($ws->name ?? "Land & Finance"))

@section('keywords', 'property, real estate, listing, projects, buy, rent, land, finance, apartment, villa, house')

@section('description', 'Browse our projects and properties for sale and rent. Find your perfect home, land, apartment, or commercial property.')

@push('css')
<style>
    .projects-grid-wrap { max-width: 1400px; margin: 0 auto; }
    /* Simple pagination matching the design */
    .lf-pagination {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8px;
        padding: 10px 20px 70px;
    }
    .lf-pagination a,
    .lf-pagination span {
        min-width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 14px;
        border-radius: 8px;
        background: #fff;
        color: #333;
        font-weight: 600;
        font-size: 14px;
        border: 1px solid #ececec;
        box-shadow: 0 4px 14px rgba(0,0,0,0.05);
        transition: 0.3s;
    }
    .lf-pagination a:hover { background: var(--primary); color: #fff; border-color: var(--primary); }
    .lf-pagination .current { background: var(--primary); color: #fff; border-color: var(--primary); }
    .lf-pagination .disabled { opacity: 0.45; pointer-events: none; }
    .projects-empty { text-align: center; color: #666; padding: 40px 20px 80px; font-size: 16px; }
</style>
@endpush

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>Projects</h1>
        <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Projects</div>
    </section>

    @php
        // $dynamic comes from the controller. true = show database data, false = show the static design.
        $dynamic = ($dynamic ?? false) && isset($properties) && $properties->count() > 0;
    @endphp

    <!-- Projects Grid -->
    <section class="flex-property-section">
        <div class="flex-property-grid projects-grid-wrap">

            @if($dynamic)
            {{-- ===== DYNAMIC: real properties from the database ===== --}}
            @foreach($properties as $property)
            <div class="flex-property-card">
                <div class="flex-property-image">
                    <img src="{{ asset('frontend/images/property/fp' . (($loop->index % 6) + 1) . '.jpg') }}" alt="{{ $property->name ?? 'Property' }}">
                    @if($property->featured ?? false)
                    <div class="flex-featured">FEATURED</div>
                    @endif
                    <div class="flex-ribbon">{{ strtoupper($property->status ?? 'SALE') }}</div>
                    <div class="flex-count"><i class="fa-solid fa-camera"></i> {{ $loop->iteration }}</div>
                    <div class="flex-icons">
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                        <a href="#"><i class="fa-solid fa-expand"></i></a>
                    </div>
                </div>
                <div class="flex-property-content">
                    <div class="flex-tags">
                        <div class="flex-tag flex-blue">{{ ucfirst($property->type ?? 'Property') }}</div>
                        <div class="flex-tag flex-orange">{{ ucfirst($property->status ?? 'Sale') }}</div>
                    </div>
                    <div class="flex-price">BDT {{ number_format($property->price ?? 0) }}</div>
                    <div class="flex-title">{{ $property->name ?? 'Property Listing' }}</div>
                    <div class="flex-location"><i class="fa-solid fa-location-dot"></i> {{ $property->address ?? 'Dhaka, Bangladesh' }}</div>
                    <div class="flex-features">
                        <div><i class="fa-solid fa-vector-square"></i> {{ $property->sqft ?? 0 }} Sqft</div>
                        <div><i class="fa-solid fa-bed"></i> {{ $property->bedrooms ?? 0 }} Beds</div>
                        <div><i class="fa-solid fa-bath"></i> {{ $property->bathrooms ?? 0 }} Baths</div>
                    </div>
                    <div class="flex-footer">
                        <img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="Agent">
                        <div class="flex-company">{{ $ws->name ?? 'Land & Finance' }}</div>
                    </div>
                    <a href="{{ route('project.details', $property->id) }}" class="flex-btn">VIEW DETAILS</a>
                </div>
            </div>
            @endforeach
            @else
            {{-- ===== STATIC: the original design (shown when $dynamic is false) ===== --}}
            @php
                $designProjects = [
                    ['img'=>'https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-abason-project.jpg','ribbon'=>'RENT','count'=>'1/5','cat'=>'Land','deal'=>'Sale','price'=>'BDT 1,99,99999','title'=>'3 Katha land for sale','location'=>'Gulshan 2, Dhaka, Bangladesh','f1'=>'1405 Sqft','f2'=>'1 Owner','f3'=>'11 Floors','logo'=>'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/7322/6f3feb1108738a56d7e3c4ae32409cd5.jpg','company'=>'ACME Development'],
                    ['img'=>'https://propertymanagementbd.com/wp-content/uploads/2026/05/sunvalley-land-project-overview.webp','ribbon'=>'RENT','count'=>'1/5','cat'=>'Land','deal'=>'RENT','price'=>'BDT 1,99,999 / Month','title'=>'7 Katha Land','location'=>'Gulshan 2, Dhaka, Bangladesh','f1'=>'1 Parking','f2'=>'1 Living','f3'=>'11 Floors','logo'=>'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/886/d87a7fe074ef2fe207aa46133ba60c31.jpg','company'=>'Scion Asset Developers'],
                    ['img'=>'https://propertymanagementbd.com/wp-content/uploads/2026/05/shornali-abashon-plot.jpg','ribbon'=>'SELL','count'=>'1/7','cat'=>'Land','deal'=>'SALE','price'=>'BDT 457,99999','title'=>'Butifull Land for sale','location'=>'Bashundhara R/A, Dhaka','f1'=>'1305 sqft','f2'=>'1 Living','f3'=>'8 Floors','logo'=>'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg','company'=>'Green Land Development'],
                    ['img'=>'https://propertymanagementbd.com/wp-content/uploads/2026/05/shornali-abashon-plot-in-dhaka.jpg','ribbon'=>'SELL','count'=>'1/7','cat'=>'Land','deal'=>'SALE','price'=>'BDT 47,99999','title'=>'Semi Furnished Land For Sale','location'=>'Bashundhara R/A, Dhaka','f1'=>'1605 Sqft','f2'=>'1 Living','f3'=>'8 Floors','logo'=>'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg','company'=>'Green Land Development'],
                    ['img'=>'https://propertymanagementbd.com/wp-content/uploads/2026/05/leading-land-developer-company.webp','ribbon'=>'CUSTOM','count'=>'1/9','cat'=>'PENTHOUSE','deal'=>'LUXURY','price'=>'BDT 65,999 / Month','title'=>'Spacious Brand New Penthouse Apartment','location'=>'Uttara Sector 7, Dhaka','f1'=>'2 Parking','f2'=>'2 Living','f3'=>'15 Floors','logo'=>'https://www.bdhousing.com/api/Common/getDeveloperLogo/users/200X200/13517/071ed1b6a03ce6a19e798963cd0665c4.jpg','company'=>'Green Land Development'],
                ];
            @endphp
            @foreach($designProjects as $p)
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
                    <a href="{{ route('project.details') }}" class="flex-btn">VIEW DETAILS</a>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </section>

    {{-- Pagination (only when showing dynamic, paginated data) --}}
    @if($dynamic && method_exists($properties, 'hasPages') && $properties->hasPages())
    <div class="lf-pagination">
        @if($properties->onFirstPage())
            <span class="disabled"><i class="fa-solid fa-angle-left"></i></span>
        @else
            <a href="{{ $properties->appends(request()->query())->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
        @endif

        @foreach($properties->appends(request()->query())->getUrlRange(1, $properties->lastPage()) as $page => $url)
            @if($page == $properties->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        @if($properties->hasMorePages())
            <a href="{{ $properties->appends(request()->query())->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
        @else
            <span class="disabled"><i class="fa-solid fa-angle-right"></i></span>
        @endif
    </div>
    @endif

@endsection
