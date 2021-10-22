<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property string $locale
 * @property Model  $translates_model
 */
class CategoryTranslation extends TranslationModel
{
    protected string $translates = Category::class;
}
