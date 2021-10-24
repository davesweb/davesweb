<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property string $title    The title of the person this resume belongs to
 * @property array  $about_me The introductory text for the resume
 */
class ResumeTranslation extends TranslationModel
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
        'id'        => 'integer',
        'resume_id' => 'integer',
        'about_me'  => 'array',
    ];
}
