<?php

namespace App\Models\Resume;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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
 * @property Collection|Project[]    $projects
 * @property Collection|Education[]  $educations
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
        return $this->belongsToMany(Skill::class, 'resume_skills');
    }

    public function getTranslatedSkills(): Collection
    {
        return $this->skills()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->withPivot('score')
            ->get()
        ;
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class, 'resume_id', 'id');
    }

    public function getTranslatedExperiences(): Collection
    {
        return $this->experiences()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->get()
        ;
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function getTranslatedProjects(): Collection
    {
        return $this->projects()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->get()
        ;
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function getTranslatedEducations(): Collection
    {
        return $this->educations()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->get()
            ;
    }

    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }

    public function getOrderedLanguages(): Collection
    {
        return $this->languages()->orderBy('proficiency', 'ASC')->get();
    }

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}
