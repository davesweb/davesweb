<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomepageController extends Controller
{
    public function index(): Renderable
    {
        return view('blog.homepage');
    }
}
