@extends('website.layouts.home_finance')

@section('title', $news->title . " - Home & Finance Int'l Ltd.")

@section('keywords', $news->category->name ?? 'news, blog, real estate, property')

@section('description', \Illuminate\Support\Str::limit(strip_tags($news->excerpt ?? $news->description_en ?? ''), 160))

@section('content')
    <section class="blog_post_container bgc-f7 pb30">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content style2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('news') }}">Blog</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">{{ \Illuminate\Support\Str::limit($news->title, 40) }}</li>
                        </ol>
                        <h2 class="breadcrumb_title">Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_post_content">
                        <div class="mbp_thumb_post">
                            <div class="blog_sp_tag"><a href="#">{{ $news->category->name ?? 'General' }}</a></div>
                            <h3 class="blog_sp_title">{{ $news->title }}</h3>
                            <ul class="blog_sp_post_meta">
                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="author"></a></li>
                                <li class="list-inline-item"><a href="#">Admin</a></li>
                                <li class="list-inline-item"><span class="flaticon-calendar"></span></li>
                                <li class="list-inline-item"><a href="#">{{ $news->created_at ? $news->created_at->format('F d, Y') : '' }}</a></li>
                                <li class="list-inline-item"><span class="flaticon-view"></span></li>
                                <li class="list-inline-item"><a href="#"> {{ $news->view_count ?? 0 }} views</a></li>
                                <li class="list-inline-item"><span class="flaticon-chat"></span></li>
                                <li class="list-inline-item"><a href="#">15</a></li>
                            </ul>
                            <div class="thumb">
                                <img class="img-fluid" src="{{ route('imagecache', ['template' => 'original', 'filename' => $news->fi()]) }}" alt="{{ $news->title }}">
                            </div>
                            <div class="details">
                                <p class="mb30">{{ $news->excerpt ?? '' }}</p>
                                <div class="blog-content-area">
                                    {!! $news->description_en ?? $news->description ?? '' !!}
                                </div>
                            </div>
                            <ul class="blog_post_share">
                                <li><p>Share</p></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="mbp_pagination_tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="pag_prev">
                                        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                                            <a href="{{ route('singleNews', ['id' => $relatedPosts->first()->id]) }}"><span class="flaticon-back"></span></a>
                                            <div class="detls"><h5>Previous Post</h5><p>{{ \Illuminate\Support\Str::limit($relatedPosts->first()->title, 30) }}</p></div>
                                        @else
                                            <a href="{{ route('news') }}"><span class="flaticon-back"></span></a>
                                            <div class="detls"><h5>Previous Post</h5><p>All News</p></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="pag_next text-right">
                                        @if(isset($relatedPosts) && $relatedPosts->count() > 1)
                                            <a href="{{ route('singleNews', ['id' => $relatedPosts->skip(1)->first()->id]) }}"><span class="flaticon-next"></span></a>
                                            <div class="detls"><h5>Next Post</h5><p>{{ \Illuminate\Support\Str::limit($relatedPosts->skip(1)->first()->title, 30) }}</p></div>
                                        @else
                                            <a href="{{ route('news') }}"><span class="flaticon-next"></span></a>
                                            <div class="detls"><h5>Next Post</h5><p>All News</p></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_single_content mb30">
                            <div class="mbp_pagination_comments">
                                <div class="total_review">
                                    <h4>896 Reviews</h4>
                                    <ul class="review_star_list mb0 pl10">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <a class="tr_outoff pl10" href="#">( 4.5 out of 5 )</a>
                                    <a class="write_review float-right fn-xsd" href="#">Write a Review</a>
                                </div>
                                <div class="mbp_first media">
                                    <img src="{{ asset('frontend/images/testimonial/1.png') }}" class="mr-3" alt="testimonial">
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0">Diana Cooper
                                            <span class="sspd_review">
                                                <ul class="mb0 pl15">
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"></li>
                                                </ul>
                                            </span>
                                        </h4>
                                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                                        <p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                                    </div>
                                </div>
                                <div class="custom_hr"></div>
                                <div class="mbp_first media">
                                    <img src="{{ asset('frontend/images/testimonial/2.png') }}" class="mr-3" alt="testimonial">
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0">Ali Tufan
                                            <span class="sspd_review">
                                                <ul class="mb0 pl15">
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"></li>
                                                </ul>
                                            </span>
                                        </h4>
                                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                                        <p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bsp_reveiw_wrt">
                            <h4>Write a Review</h4>
                            <ul class="review_star">
                                <li class="list-inline-item">
                                    <span class="sspd_review">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </span>
                                </li>
                                <li class="list-inline-item pr15"><p>Your Rating & Review</p></li>
                            </ul>
                            <form class="comments_form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Your Review"></textarea>
                                </div>
                                <button type="submit" class="btn btn-thm">Submit Review</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb20">
                            <h4>Related Posts</h4>
                        </div>
                        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                            @foreach($relatedPosts->take(2) as $post)
                            <div class="col-md-6 col-lg-6">
                                <div class="for_blog feat_property">
                                    <div class="thumb">
                                        <a href="{{ route('singleNews', ['id' => $post->id]) }}">
                                            <img class="img-whp" src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}" alt="{{ $post->title }}">
                                        </a>
                                        <div class="tag">{{ $post->category->name ?? 'General' }}</div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4><a href="{{ route('singleNews', ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                            <ul class="bpg_meta">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
                                                <li class="list-inline-item"><a href="#">{{ $post->created_at ? $post->created_at->format('F d, Y') : '' }}</a></li>
                                            </ul>
                                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?? ''), 100) }}</p>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="author"></a></li>
                                                <li class="list-inline-item"><a href="#">Admin</a></li>
                                            </ul>
                                            <a class="fp_pdate float-right text-thm" href="{{ route('singleNews', ['id' => $post->id]) }}">Read More <span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="col-md-6 col-lg-6">
                                <div class="for_blog feat_property">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('frontend/images/blog/1.jpg') }}" alt="blog">
                                        <div class="tag">Construction</div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4>Redfin Ranks the Most Competitive Neighborhoods of 2020</h4>
                                            <ul class="bpg_meta">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
                                                <li class="list-inline-item"><a href="#">January 16, 2020</a></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur text link libero tempus congue.</p>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="author"></a></li>
                                                <li class="list-inline-item"><a href="#">Admin</a></li>
                                            </ul>
                                            <a class="fp_pdate float-right text-thm" href="#">Read More <span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="for_blog feat_property">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('frontend/images/blog/2.jpg') }}" alt="blog">
                                        <div class="tag">Construction</div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4>Housing Markets That Changed the Most This Decade</h4>
                                            <ul class="bpg_meta">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
                                                <li class="list-inline-item"><a href="#">January 16, 2020</a></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur text link libero tempus congue.</p>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="author"></a></li>
                                                <li class="list-inline-item"><a href="#">Admin</a></li>
                                            </ul>
                                            <a class="fp_pdate float-right text-thm" href="#">Read More <span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar_search_widget">
                        <div class="blog_search_widget">
                            <form action="{{ route('news') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title">Categories Property</h4>
                        <div class="widget_list">
                            <ul class="list_details">
                                @if(isset($newsCategories) && $newsCategories->count() > 0)
                                    @foreach($newsCategories as $cat)
                                    <li>
                                        <a href="{{ route('news', ['category' => $cat->id]) }}">
                                            <i class="fa fa-caret-right mr10"></i>{{ $cat->name }} <span class="float-right">{{ $cat->posts_count ?? 0 }} properties</span>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_feature_listing">
                        <h4 class="title">Featured Listings</h4>
                        @if(isset($featuredProperties) && $featuredProperties->count() > 0)
                            @foreach($featuredProperties as $property)
                            <div class="media">
                                <a href="{{ route('productDetails', ['slug' => $property->slug]) }}">
                                    <img class="align-self-start mr-3" src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $property->fi()]) }}" alt="{{ $property->name ?? 'Property' }}">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">{{ $property->name ?? 'Property' }}</h5>
                                    <a href="{{ route('productDetails', ['slug' => $property->slug]) }}">${{ number_format($property->final_price ?? 13000) }}/<small>/mo</small></a>
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
                            <li class="list-inline-item"><a href="#">Real</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
