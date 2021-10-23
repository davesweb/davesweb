<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Category;
use App\Http\Controllers\Controller;
use App\Models\Blog\CategoryTranslation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Support\Renderable;

class CategoryController extends Controller
{
    public function index(): Renderable
    {
        $categories = Category::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations'])
            ->withCount(['posts'])
            ->paginate()
        ;

        return view('blog.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(CategoryTranslation $categoryTranslation): Renderable
    {
        /** @var Category $category */
        $category = $categoryTranslation->getTranslatesModel();

        $posts = $category->posts()->paginate();

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }
}
