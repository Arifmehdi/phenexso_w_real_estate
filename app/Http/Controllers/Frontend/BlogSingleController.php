<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    public function __construct()
    {
        $this->middleware('locale');
    }

    public function show($slug)
    {
        if (is_numeric($slug)) {
            $news = BlogPost::where('id', $slug)->firstOrFail();
        } else {
            $news = BlogPost::where('slug', $slug)->firstOrFail();
        }
        $news->increment('view_count');

        $data['relatedPosts'] = BlogPost::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->where('active', true)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $data['latestPosts'] = BlogPost::where('active', true)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $data['newsCategories'] = BlogCategory::withCount('posts')->get();

        $data['featuredProperties'] = Product::whereActive(true)
            ->where('feature', true)
            ->latest()
            ->limit(3)
            ->get();

        $data['news'] = $news;

        return view('website.blog_single', $data);
    }
}
