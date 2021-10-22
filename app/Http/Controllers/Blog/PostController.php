<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Models\Blog\PostTranslation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Support\Renderable;

class PostController
{
    public function show(PostTranslation $postTranslation): Renderable
    {
        return view('blog.post', [
            'post' => $postTranslation->getTranslatesModel(),
        ]);
    }

    public function search(Request $request): Renderable
    {
        $searchQuery = $request->get('q');

        $posts = Post::query()
            ->whereHas('translations', function (Builder $query) use ($searchQuery) {
                $query->where('locale', '=', app()->getLocale());
                $query->where(function (Builder $query) use ($searchQuery) {
                    $query->where('title', 'LIKE', '%' . $searchQuery . '%');
                    $query->orWhere('content', 'LIKE', '%' . $searchQuery . '%');
                });
            })
            ->with(['translations'])
            ->where('publish_date', '<=', now())
            ->where('status', '=', Post::STATUS_PUBLISHED)
            ->paginate()
        ;

        return view('blog.homepage', [
            'posts' => $posts,
        ]);
    }

    public function archive(int $year, int $month): Renderable
    {
        $posts = Post::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations'])
            ->where('publish_date', '<=', now())
            ->where('status', '=', Post::STATUS_PUBLISHED)
            ->whereRaw('YEAR(publish_date) = ?', [$year])
            ->whereRaw('MONTH(publish_date) = ?', [$month])
            ->paginate()
        ;

        return view('blog.homepage', [
            'posts' => $posts,
        ]);
    }
}
