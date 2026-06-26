@extends('website.layouts.finance_design')

@section('title', $news->title . " — " . ($ws->name ?? "Land & Finance"))

@section('keywords', $news->category->name ?? 'news, blog, real estate, property')

@section('description', \Illuminate\Support\Str::limit(strip_tags($news->excerpt ?? $news->description_en ?? ''), 160))

@push('css')
<style>
    /* Article meta */
    .article-cat {
        display: inline-block;
        background: var(--primary);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        padding: 6px 14px;
        border-radius: 30px;
        margin-bottom: 16px;
    }
    .article-title {
        font-family: 'Playfair Display', serif;
        font-size: 34px;
        line-height: 1.3;
        color: var(--dark);
        margin-bottom: 16px;
    }
    .article-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
        color: var(--text-light);
        font-size: 14px;
        margin-bottom: 26px;
        padding-bottom: 22px;
        border-bottom: 1px solid var(--border);
    }
    .article-meta span i { color: var(--primary); margin-right: 7px; }
    .article-hero {
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        margin-bottom: 28px;
    }
    .article-hero img { width: 100%; display: block; }
    .article-excerpt { font-size: 17px; font-weight: 600; color: var(--dark); line-height: 1.8; margin-bottom: 22px; }
    .article-body { color: var(--text); font-size: 16px; line-height: 1.9; }
    .article-body p { margin-bottom: 18px; }
    .article-body h2, .article-body h3 { font-family: 'Playfair Display', serif; color: var(--dark); margin: 26px 0 14px; }
    .article-body img { max-width: 100%; border-radius: 12px; margin: 18px 0; }
    .article-body ul, .article-body ol { margin: 0 0 18px 22px; }

    .article-share { display: flex; align-items: center; gap: 10px; margin: 32px 0; padding-top: 22px; border-top: 1px solid var(--border); }
    .article-share span { font-weight: 700; color: var(--dark); margin-right: 4px; }
    .article-share a {
        width: 40px; height: 40px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        background: #f1f3f7; color: #333; transition: 0.3s;
    }
    .article-share a:hover { background: var(--primary); color: #fff; transform: translateY(-3px); }

    /* Related posts */
    .related-block h2 {
        font-family: 'Playfair Display', serif;
        font-size: 26px; color: var(--dark); margin: 10px 0 22px;
    }
    .related-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 22px; }
    .related-card { background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.07); transition: 0.4s; }
    .related-card:hover { transform: translateY(-6px); box-shadow: 0 14px 34px rgba(0,0,0,0.12); }
    .related-card img { width: 100%; height: 160px; object-fit: cover; }
    .related-card .rc-body { padding: 16px 18px; }
    .related-card .rc-date { font-size: 12px; color: var(--primary); font-weight: 600; margin-bottom: 8px; }
    .related-card h4 { font-size: 16px; line-height: 1.4; color: var(--dark); }
    .related-card h4 a:hover { color: var(--primary); }

    /* Sidebar widgets */
    .lf-widget { background: #fff; border-radius: 16px; padding: 24px; box-shadow: 0 8px 26px rgba(0,0,0,0.07); margin-bottom: 25px; }
    .lf-widget h4 { font-family: 'Playfair Display', serif; font-size: 19px; color: var(--dark); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 2px solid var(--border); }
    .lf-widget-search { display: flex; }
    .lf-widget-search input { flex: 1; border: 1px solid #d1d5db; border-right: none; border-radius: 10px 0 0 10px; padding: 11px 14px; font-family: inherit; font-size: 14px; outline: none; }
    .lf-widget-search input:focus { border-color: var(--primary); }
    .lf-widget-search button { border: none; background: var(--primary); color: #fff; padding: 0 16px; border-radius: 0 10px 10px 0; cursor: pointer; }
    .lf-cat-list li { border-bottom: 1px solid #f0f0f0; }
    .lf-cat-list li:last-child { border-bottom: none; }
    .lf-cat-list a { display: flex; justify-content: space-between; padding: 10px 0; color: var(--text); font-size: 14px; font-weight: 500; }
    .lf-cat-list a:hover { color: var(--primary); padding-left: 5px; }
    .lf-post { display: flex; gap: 12px; margin-bottom: 16px; }
    .lf-post:last-child { margin-bottom: 0; }
    .lf-post img { width: 64px; height: 64px; border-radius: 10px; object-fit: cover; flex-shrink: 0; }
    .lf-post h5 { font-size: 14px; line-height: 1.4; color: var(--dark); margin-bottom: 4px; }
    .lf-post h5 a:hover { color: var(--primary); }
    .lf-post .lf-post-date { font-size: 12px; color: var(--text-light); }

    @media (max-width: 600px) {
        .article-title { font-size: 26px; }
        .related-grid { grid-template-columns: 1fr; }
    }
</style>
@endpush

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>Article Details</h1>
        <div class="breadcrumb">
            <a href="{{ url('/') }}">Home</a> &raquo;
            <a href="{{ route('news') }}">News</a> &raquo; {{ \Illuminate\Support\Str::limit($news->title, 40) }}
        </div>
    </section>

    <!-- Detail Wrapper -->
    <div class="pd-wrapper">

        <!-- Main Column -->
        <div class="pd-main">

            <span class="article-cat">{{ $news->category->name ?? 'General' }}</span>
            <h1 class="article-title">{{ $news->title }}</h1>
            <div class="article-meta">
                <span><i class="fa-regular fa-user"></i> Admin</span>
                <span><i class="fa-regular fa-calendar"></i> {{ $news->created_at ? $news->created_at->format('F d, Y') : '' }}</span>
                <span><i class="fa-regular fa-eye"></i> {{ $news->view_count ?? 0 }} views</span>
            </div>

            <div class="article-hero">
                <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $news->fi()]) }}" alt="{{ $news->title }}">
            </div>

            @if(!empty($news->excerpt))
            <p class="article-excerpt">{{ $news->excerpt }}</p>
            @endif

            <div class="article-body">
                {!! $news->description_en ?? $news->description ?? '' !!}
            </div>

            <!-- Share -->
            <div class="article-share">
                <span>Share:</span>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>

            <!-- Related Posts -->
            @if(isset($relatedPosts) && $relatedPosts->count() > 0)
            <div class="related-block">
                <h2>Related Articles</h2>
                <div class="related-grid">
                    @foreach($relatedPosts->take(2) as $post)
                    <div class="related-card">
                        <a href="{{ route('singleNews', ['id' => $post->id]) }}">
                            <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}" alt="{{ $post->title }}">
                        </a>
                        <div class="rc-body">
                            <div class="rc-date"><i class="fa-regular fa-calendar"></i> {{ $post->created_at ? $post->created_at->format('M d, Y') : '' }}</div>
                            <h4><a href="{{ route('singleNews', ['id' => $post->id]) }}">{{ \Illuminate\Support\Str::limit($post->title, 60) }}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

        <!-- Sidebar -->
        <aside class="pd-sidebar">

            <!-- Search -->
            <div class="lf-widget">
                <h4>Search</h4>
                <form class="lf-widget-search" action="{{ route('news') }}" method="GET">
                    <input type="text" name="search" placeholder="Search articles..." value="{{ request('search') }}">
                    <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <!-- Categories -->
            @if(isset($newsCategories) && $newsCategories->count() > 0)
            <div class="lf-widget">
                <h4>Categories</h4>
                <ul class="lf-cat-list">
                    @foreach($newsCategories as $cat)
                    <li>
                        <a href="{{ route('news', ['category' => $cat->id]) }}">
                            <span>{{ $cat->name }}</span>
                            <span>{{ $cat->posts_count ?? 0 }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Latest Posts -->
            @if(isset($latestPosts) && $latestPosts->count() > 0)
            <div class="lf-widget">
                <h4>Latest Articles</h4>
                @foreach($latestPosts->take(5) as $post)
                <div class="lf-post">
                    <a href="{{ route('singleNews', ['id' => $post->id]) }}">
                        <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}" alt="{{ $post->title }}">
                    </a>
                    <div>
                        <h5><a href="{{ route('singleNews', ['id' => $post->id]) }}">{{ \Illuminate\Support\Str::limit($post->title, 50) }}</a></h5>
                        <div class="lf-post-date"><i class="fa-regular fa-calendar"></i> {{ $post->created_at ? $post->created_at->format('M d, Y') : '' }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </aside>

    </div>

@endsection
