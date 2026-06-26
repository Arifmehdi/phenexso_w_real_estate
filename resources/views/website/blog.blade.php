@extends('website.layouts.finance_design')

@section('title', "News & Articles — " . ($ws->name ?? "Land & Finance"))

@section('keywords', 'news, blog, articles, real estate, property, land, finance, market trends')

@section('description', 'Stay updated with the latest news and articles about real estate, property market trends, and finance tips.')

@push('css')
<style>
    .news-wrap { max-width: 1200px; margin: 0 auto; padding: 60px 20px 30px; }

    /* Toolbar: search + categories */
    .news-toolbar {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 35px;
    }
    .news-search { display: flex; max-width: 360px; width: 100%; }
    .news-search input {
        flex: 1;
        border: 1px solid #d1d5db;
        border-right: none;
        border-radius: 10px 0 0 10px;
        padding: 12px 16px;
        font-family: inherit;
        font-size: 14px;
        outline: none;
    }
    .news-search input:focus { border-color: var(--primary); }
    .news-search button {
        border: none;
        background: var(--primary);
        color: #fff;
        padding: 0 18px;
        border-radius: 0 10px 10px 0;
        cursor: pointer;
        font-size: 15px;
    }
    .news-cats { display: flex; flex-wrap: wrap; gap: 8px; }
    .news-cat {
        padding: 8px 16px;
        border-radius: 30px;
        background: #fff;
        border: 1px solid #ececec;
        color: #333;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 4px 14px rgba(0,0,0,0.05);
        transition: 0.3s;
    }
    .news-cat:hover, .news-cat.active { background: var(--primary); color: #fff; border-color: var(--primary); }

    /* Cards grid */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }
    .news-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: 0.4s;
        display: flex;
        flex-direction: column;
    }
    .news-card:hover { transform: translateY(-8px); box-shadow: 0 18px 45px rgba(0,0,0,0.14); }
    .news-card-img { position: relative; height: 220px; overflow: hidden; }
    .news-card-img img { width: 100%; height: 100%; object-fit: cover; transition: 0.6s; }
    .news-card:hover .news-card-img img { transform: scale(1.08); }
    .news-card-tag {
        position: absolute;
        top: 14px; left: 14px;
        background: var(--primary);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        padding: 6px 12px;
        border-radius: 30px;
        letter-spacing: 0.5px;
    }
    .news-card-body { padding: 22px; display: flex; flex-direction: column; flex: 1; }
    .news-card-date { font-size: 13px; color: var(--primary); font-weight: 600; margin-bottom: 10px; }
    .news-card-date i { margin-right: 6px; }
    .news-card-body h3 {
        font-family: 'Playfair Display', serif;
        font-size: 21px;
        line-height: 1.35;
        color: var(--dark);
        margin-bottom: 12px;
    }
    .news-card-body h3 a { color: inherit; }
    .news-card-body h3 a:hover { color: var(--primary); }
    .news-card-body p { font-size: 14px; color: var(--text); line-height: 1.7; margin-bottom: 18px; flex: 1; }
    .news-readmore {
        font-weight: 700;
        font-size: 14px;
        color: var(--primary);
        align-self: flex-start;
    }
    .news-readmore i { margin-left: 6px; transition: 0.3s; }
    .news-readmore:hover i { margin-left: 12px; }

    .news-empty {
        grid-column: 1 / -1;
        text-align: center;
        color: #666;
        padding: 50px 20px;
        font-size: 16px;
    }

    /* Pagination (matches Projects page) */
    .lf-pagination { display: flex; justify-content: center; flex-wrap: wrap; gap: 8px; padding: 45px 20px 30px; }
    .lf-pagination a, .lf-pagination span {
        min-width: 42px; height: 42px; display: flex; align-items: center; justify-content: center;
        padding: 0 14px; border-radius: 8px; background: #fff; color: #333; font-weight: 600; font-size: 14px;
        border: 1px solid #ececec; box-shadow: 0 4px 14px rgba(0,0,0,0.05); transition: 0.3s;
    }
    .lf-pagination a:hover { background: var(--primary); color: #fff; border-color: var(--primary); }
    .lf-pagination .current { background: var(--primary); color: #fff; border-color: var(--primary); }
    .lf-pagination .disabled { opacity: 0.45; pointer-events: none; }

    @media (max-width: 992px) { .news-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 640px) { .news-grid { grid-template-columns: 1fr; } .news-toolbar { flex-direction: column; align-items: stretch; } }
</style>
@endpush

@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <h1>News &amp; Articles</h1>
        <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; News &amp; Articles</div>
    </section>

    <div class="news-wrap">

        <!-- Search + Categories -->
        <div class="news-toolbar">
            <form class="news-search" action="{{ route('news') }}" method="GET">
                <input type="text" name="search" placeholder="Search articles..." value="{{ request('search') }}">
                <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            @if(isset($newsCategories) && $newsCategories->count() > 0)
            <div class="news-cats">
                <a href="{{ route('news') }}" class="news-cat {{ request('category') ? '' : 'active' }}">All</a>
                @foreach($newsCategories as $category)
                <a href="{{ route('news', ['category' => $category->id]) }}"
                   class="news-cat {{ request('category') == $category->id ? 'active' : '' }}">
                    {{ $category->name }} ({{ $category->posts_count ?? 0 }})
                </a>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Articles Grid -->
        <div class="news-grid">
            @forelse($news as $post)
            <div class="news-card">
                <div class="news-card-img">
                    <a href="{{ route('singleNews', ['id' => $post->id]) }}">
                        <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}" alt="{{ $post->title }}">
                    </a>
                    <span class="news-card-tag">{{ $post->category->name ?? 'General' }}</span>
                </div>
                <div class="news-card-body">
                    <div class="news-card-date"><i class="fa-regular fa-calendar"></i> {{ $post->created_at ? $post->created_at->format('F d, Y') : '' }}</div>
                    <h3><a href="{{ route('singleNews', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?? $post->description_en ?? ''), 130, '...') }}</p>
                    <a class="news-readmore" href="{{ route('singleNews', ['id' => $post->id]) }}">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            @empty
            <div class="news-empty">
                <i class="fa-regular fa-newspaper" style="font-size:42px;color:#ccc;display:block;margin-bottom:14px;"></i>
                No articles available at the moment. Please check back later.
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if(method_exists($news, 'hasPages') && $news->hasPages())
        <div class="lf-pagination">
            @if($news->onFirstPage())
                <span class="disabled"><i class="fa-solid fa-angle-left"></i></span>
            @else
                <a href="{{ $news->appends(request()->query())->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
            @endif

            @foreach($news->appends(request()->query())->getUrlRange(1, $news->lastPage()) as $page => $url)
                @if($page == $news->currentPage())
                    <span class="current">{{ $page }}</span>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach

            @if($news->hasMorePages())
                <a href="{{ $news->appends(request()->query())->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
            @else
                <span class="disabled"><i class="fa-solid fa-angle-right"></i></span>
            @endif
        </div>
        @endif

    </div>

@endsection
