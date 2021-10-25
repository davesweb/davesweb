<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int    $id
 * @property int    $resume_id
 * @property string $language
 * @property int    $proficiency
 */
class Language extends Model
{
    use HasFactory;

    public const PROFICIENCY_NATIVE         = 0;
    public const PROFICIENCY_FLUENT         = 1;
    public const PROFICIENCY_CONVERSATIONAL = 2;
    public const PROFICIENCY_BASIC          = 0;

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
