<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property int    $experience_id
 * @property string $role
 * @property string     timeframe
 * @property string     $location
 * @property null|array $content
 */
class ExperienceTranslation extends TranslationModel
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'            => 'integer',
        'experience_id' => 'integer',
        'content'       => 'array',
    ];
}
