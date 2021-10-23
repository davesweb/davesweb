<?php

namespace App\Services;

use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PostService
{
    public function getHomepagePosts(): LengthAwarePaginator
    {
        return $this->baseQuery()->paginate();
    }

    public function searchPosts(string $searchQuery): LengthAwarePaginator
    {
        return Post::query()
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
    }

    public function getArchivedPosts(int $year, int $month): LengthAwarePaginator
    {
        return $this->baseQuery()
            ->whereYear('publish_date', '=', $year)
            ->whereMonth('publish_date', '=', $month)
            ->paginate()
        ;
    }

    public function allByCategory(Category $category): LengthAwarePaginator
    {
        return $category->posts()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations'])
            ->where('publish_date', '<=', now())
            ->where('status', '=', Post::STATUS_PUBLISHED)
            ->paginate()
        ;
    }

    private function baseQuery(): Builder
    {
        return Post::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations'])
            ->where('publish_date', '<=', now())
            ->where('status', '=', Post::STATUS_PUBLISHED)
        ;
    }
}
