<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

class PostTranslation extends TranslationModel
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    protected string $translates = Post::class;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'      => 'integer',
        'content' => 'array',
    ];
}
