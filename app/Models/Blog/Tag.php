<?php

namespace App\Models\Blog;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int               $id
 * @property Collection|Post[] $posts
 */
class Tag extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id', 'id', 'id');
    }
}
