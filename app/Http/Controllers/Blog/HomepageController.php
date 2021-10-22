<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Post;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomepageController extends Controller
{
    public function index(): Renderable
    {
        $posts = Post::query()
            ->with(['translations'])
            ->where('publish_date', '<=', now())
            ->where('status', '=', Post::STATUS_PUBLISHED)
            ->paginate();

        return view('blog.homepage', [
            'posts' => $posts
        ]);
    }
}
