<?php

namespace App\Models\Resume;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;

/**
 * @property int                $id
 * @property Collection|Skill[] $skills
 */
class SkillCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class, 'id', 'category_id');
    }
}
