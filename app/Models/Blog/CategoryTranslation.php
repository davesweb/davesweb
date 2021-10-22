<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property string $locale
 * @property Model  $translates_model
 */
class CategoryTranslation extends TranslationModel
{
    use HasFactory;

    protected string $translates = Category::class;
}
