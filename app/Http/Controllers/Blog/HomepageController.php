<?php

namespace App\Http\Controllers\Blog;

use App\Services\PostService;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomepageController extends Controller
{
    public function index(PostService $service): Renderable
    {
        return view('blog.index', [
            'posts' => $service->getHomepagePosts(),
        ]);
    }
}
