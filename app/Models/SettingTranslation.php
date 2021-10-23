<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property string $content
 */
class SettingTranslation extends TranslationModel
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;
}
