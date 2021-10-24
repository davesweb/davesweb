<?php

namespace App\Models\Resume;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int                     $id
 * @property string                  $slug        A unique identifier for this resume
 * @property string                  $name        The name of the person this resume is about
 * @property string                  $email       The email address to sent the content mails to.
 * @property Collection|Skill[]      $skills
 * @property Collection|Experience[] $experiences
 */
class Resume extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * {@inheritdoc}
     */
    protected $casts = [];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'resume_skills', 'resume_id', 'skill_id', 'ic', 'id');
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class, 'resume_id', 'id');
    }
}
