<?php

namespace App\Models\Blog;

use Davesweb\LaravelTranslatable\Models\TranslationModel;

class PostTranslation extends TranslationModel
{
    protected string $translates = Post::class;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'      => 'integer',
        'content' => 'array',
    ];
}
