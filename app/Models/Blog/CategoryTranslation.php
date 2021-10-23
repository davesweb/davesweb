<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property string $locale
 */
class CategoryTranslation extends TranslationModel
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    protected string $translates = Category::class;
}
