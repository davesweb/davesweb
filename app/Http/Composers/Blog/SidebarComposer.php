<?php

namespace App\Http\Composers\Blog;

use Illuminate\View\View;
use App\Models\Blog\Category;

class SidebarComposer
{
    public function compose(View $view): View
    {
        $categories = Category::query()/*->withCount(['posts'])*/->with(['translations'])->get();

        $view->with('categories', $categories);

        return $view;
    }
}
