<?php

namespace App\Models\Resume;

use App\Models\Blog\Tag;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int              $id
 * @property int              $resume_id
 * @property Resume           $resume
 * @property Collection|Tag[] $tags
 */
class Experience extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'        => 'integer',
        'resume_id' => 'integer',
    ];

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class, 'resume_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'experience_tags');
    }

    public function getTranslatedTags(): Collection
    {
        return $this->tags()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->get()
        ;
    }
}
