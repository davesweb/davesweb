<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Tag;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Models\Blog\TagTranslation;
use App\Http\Controllers\Controller;
use App\Models\Blog\PostTranslation;
use Illuminate\Contracts\Support\Renderable;

class PostController extends Controller
{
    public function show(PostTranslation $postTranslation): Renderable
    {
        return view('blog.post', [
            'post' => $postTranslation->getTranslatesModel(),
        ]);
    }

    public function search(Request $request, PostService $service): Renderable
    {
        $searchQuery = $request->get('q');

        $posts = $service->searchPosts($searchQuery);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function archive(PostService $service, int $year, int $month): Renderable
    {
        $posts = $service->getArchivedPosts($year, $month);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function tag(PostService $service, TagTranslation $tagTranslation): Renderable
    {
        /** @var Tag $tag */
        $tag = $tagTranslation->getTranslatesModel();

        $posts = $service->allByTag($tag);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }
}
