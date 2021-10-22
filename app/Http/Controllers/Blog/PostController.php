<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\PostTranslation;
use Illuminate\Contracts\Support\Renderable;

class PostController
{
    public function show(PostTranslation $postTranslation): Renderable
    {
        return view('blog.post', [
            'post' => $postTranslation->getTranslatesModel(),
        ]);
    }
}
