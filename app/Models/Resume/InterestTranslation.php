<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property int    $interest_id
 * @property string $title
 */
class InterestTranslation extends TranslationModel
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
        'id'          => 'integer',
        'interest_id' => 'integer',
    ];
}
