@extends('website.layouts.home_finance')

@section('title', "News & Articles - Home & Finance Int'l Ltd.")

@section('keywords', 'news, blog, articles, real estate, property, home, finance, market trends')

@section('description', 'Stay updated with the latest news and articles about real estate, property market trends, and home & finance tips from Home & Finance Intl Ltd.')

@section('content')
    <!-- Main Blog Post Content -->
    <section class="blog_post_container bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content style2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">News & Articles</li>
                        </ol>
                        <h2 class="breadcrumb_title">News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_post_content">
                        @forelse($news as $post)
                        <div class="for_blog feat_property">
                            <div class="thumb">
                                <a href="{{ route('singleNews', ['id' => $post->id]) }}">
                                    <img class="img-whp" src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}" alt="{{ $post->title }}">
                                </a>
                                <div class="blog_tag">{{ $post->category->name ?? 'General' }}</div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <h4 class="mb15"><a href="{{ route('singleNews', ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?? $post->description_en ?? ''), 200, '...') }}</p>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="author"></a></li>
                                        <li class="list-inline-item"><a href="#">Admin</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-calendar pr10"></span> {{ $post->created_at ? $post->created_at->format('F d, Y') : 'January 16, 2020' }}</a></li>
                                    </ul>
                                    <a class="fp_pdate float-right text-thm" href="{{ route('singleNews', ['id' => $post->id]) }}">Read More <span class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="for_blog feat_property">
                            <div class="details">
                                <div class="tc_content">
                                    <h4 class="mb15">No Articles Found</h4>
                                    <p>There are no news articles available at the moment. Please check back later.</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mbp_pagination mt20">
                                    {{ $news->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="sidebar_search_widget">
                        <div class="blog_search_widget">
                            <form action="{{ route('news') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search Here" value="{{ request('search') }}" aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title">Categories</h4>
                        <div class="widget_list">
                            <ul class="list_details">
                                @if(isset($newsCategories) && $newsCategories->count() > 0)
                                    @foreach($newsCategories as $category)
                                    <li>
                                        <a href="{{ route('categoryPosts', $category->id) }}">
                                            <i class="fa fa-caret-right mr10"></i>{{ $category->name }} <span class="float-right">{{ $category->posts_count ?? 0 }} posts</span>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>General <span class="float-right">6 posts</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Real Estate <span class="float-right">12 posts</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Construction <span class="float-right">8 posts</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Market Trends <span class="float-right">26 posts</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Investment <span class="float-right">89 posts</span></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_feature_listing">
                        <h4 class="title">Featured Listings</h4>
                        @if(isset($featuredProperties) && $featuredProperties->count() > 0)
                            @foreach($featuredProperties as $property)
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls' . (($loop->index % 3) + 1) . '.jpg') }}" alt="{{ $property->name ?? 'Property' }}">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">{{ $property->name ?? 'Property' }}</h5>
                                    <a href="#">${{ number_format($property->final_price ?? 13000) }}/<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: {{ $property->bedrooms ?? 4 }}</li>
                                        <li class="list-inline-item">Baths: {{ $property->bathrooms ?? 2 }}</li>
                                        <li class="list-inline-item">Sq Ft: {{ $property->sqft ?? 5280 }}</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls1.jpg') }}" alt="fls1.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Nice Room With View</h5>
                                    <a href="#">$13,000/<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls2.jpg') }}" alt="fls2.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Villa called Archangel</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls3.jpg') }}" alt="fls3.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Sunset Studio</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="blog_tag_widget">
                        <h4 class="title">Tags</h4>
                        <ul class="tag_list">
                            <li class="list-inline-item"><a href="#">Apartment</a></li>
                            <li class="list-inline-item"><a href="#">Real Estate</a></li>
                            <li class="list-inline-item"><a href="#">Estate</a></li>
                            <li class="list-inline-item"><a href="#">Luxury</a></li>
                            <li class="list-inline-item"><a href="#">Investment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
