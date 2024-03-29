<?php

namespace App\Http\Composers\Blog;

use DateInterval;
use App\Models\Blog\Tag;
use App\Models\Blog\Post;
use Illuminate\View\View;
use Illuminate\Cache\Repository;
use App\Services\CategoryService;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class SidebarComposer
{
    private Repository $repository;

    private CategoryService $categoryService;

    public function __construct(Repository $repository, CategoryService $categoryService)
    {
        $this->repository      = $repository;
        $this->categoryService = $categoryService;
    }

    public function compose(View $view): View
    {
        $this->withCategories($view);
        $this->withArchive($view);
        $this->withLocales($view);
        $this->withTags($view);

        return $view;
    }

    private function withCategories(View $view): View
    {
        $categories = $this->categoryService->allWithCount();

        $view->with('categories', $categories);

        return $view;
    }

    private function withArchive(View $view): View
    {
        $archives = $this->repository->remember('sidebar-archives-' . app()->getLocale(), DateInterval::createFromDateString('1 day'), function () {
            return Post::query()
                ->select(
                    DB::raw('COUNT(id) as total'),
                    DB::raw('MONTH(publish_date) as publish_month'),
                    DB::raw('YEAR(publish_date) as publish_year')
                )
                ->whereHas('translations', function (Builder $query) {
                    $query->where('locale', '=', app()->getLocale());
                })
                ->where('publish_date', '<=', now())
                ->where('status', '=', Post::STATUS_PUBLISHED)
                ->groupBy(['publish_month', 'publish_year'])
                ->get()
            ;
        });

        $view->with('archives', $archives);

        return $view;
    }

    private function withLocales(View $view): View
    {
        $availableLocales = config('app.available_locales', []);

        $view->with('availableLocales', $availableLocales);

        return $view;
    }

    private function withTags(View $view): View
    {
        $tags = Tag::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->withCount('posts')
            ->orderBy('posts_count', 'DESC')
            ->limit(15)
            ->get()
        ;

        $view->with('tags', $tags);

        return $view;
    }
}
