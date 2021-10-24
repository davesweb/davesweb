<?php

namespace App\Models\Resume;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int                 $id
 * @property int                 $score
 * @property Collection|Resume[] $resumes
 */
class Skill extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function resumes(): BelongsToMany
    {
        return $this->belongsToMany(Resume::class, 'resume_skills', 'skill_id', 'resume_id', 'id', 'id');
    }
}
