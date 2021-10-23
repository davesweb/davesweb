<?php

namespace App\Models\Blog;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Davesweb\LaravelTranslatable\Models\TranslationModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int                           $id
 * @property int                           $category_id
 * @property Carbon                        $publish_date
 * @property int                           $status
 * @property null|string                   $image
 * @property Category                      $category
 * @property Collection|TranslationModel[] $translations
 * @property Collection|Tag[]              $tags
 */
class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    public const STATUS_DRAFT     = 0;
    public const STATUS_PUBLISHED = 1;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'           => 'integer',
        'category_id'  => 'integer',
        'status'       => 'integer',
        'publish_date' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id', 'id', 'id');
    }

    public function getIntro(): string
    {
        // @todo once content editor is implemented
        return '';
    }
}
