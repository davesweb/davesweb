<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Category;
use App\Services\PostService;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Models\Blog\CategoryTranslation;
use Illuminate\Contracts\Support\Renderable;

class CategoryController extends Controller
{
    public function index(CategoryService $service): Renderable
    {
        $categories = $service->allWithCount();

        return view('blog.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(PostService $service, CategoryTranslation $categoryTranslation): Renderable
    {
        /** @var Category $category */
        $category = $categoryTranslation->getTranslatesModel();

        $posts = $service->allByCategory($category);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }
}
