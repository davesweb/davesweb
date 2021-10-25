<?php

namespace App\Models\Resume;

use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property int    $education_id
 * @property string $title
 * @property string $location
 * @property string $timeframe
 * @property array  $content
 */
class EducationTranslation extends TranslationModel
{
}
