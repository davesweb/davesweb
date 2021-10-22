<?php

namespace App\Models\Blog;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int                           $id
 * @property Collection|TranslationModel[] $translations
 */
class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected string $translation = CategoryTranslation::class;
}
