<?php

namespace App\Http\Composers\Blog;

use DateInterval;
use App\Models\Blog\Post;
use Illuminate\View\View;
use App\Models\Blog\Category;
use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;

class SidebarComposer
{
    private Repository $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function compose(View $view): View
    {
        $this->withCategories($view);
        $this->withArchive($view);

        return $view;
    }

    private function withCategories(View $view): View
    {
        $categories = Category::query()/*->withCount(['posts'])*/ ->with(['translations'])->get();

        $view->with('categories', $categories);

        return $view;
    }

    private function withArchive(View $view): View
    {
        $archives = $this->repository->remember('sidebar-archives', DateInterval::createFromDateString('1 day'), function () {
            return Post::query()
                ->select(
                    DB::raw('COUNT(id) as total'),
                    DB::raw('MONTH(publish_date) as publish_month'),
                    DB::raw('YEAR(publish_date) as publish_year')
                )
                ->where('publish_date', '<=', now())
                ->where('status', '=', Post::STATUS_PUBLISHED)
                ->groupBy(['publish_month', 'publish_year'])
                ->get()
            ;
        });

        $view->with('archives', $archives);

        return $view;
    }
}
