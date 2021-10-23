<?php

namespace App\Models\Blog;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int                           $id
 * @property Collection|TranslationModel[] $translations
 * @property Collection|Post[]             $posts
 */
class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
