<?php

namespace App\Models\Blog;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int                           $id
 * @property Collection|TranslationModel[] $translations
 */
class Category extends Model
{
    use HasTranslations;

    protected string $translation = CategoryTranslation::class;
}
