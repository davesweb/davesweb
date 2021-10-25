<?php

namespace App\Models\Resume;

use App\Models\Blog\Tag;
use Ramsey\Collection\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Models\TranslationModel;

/**
 * @property int    $id
 * @property int    $project_id
 * @property string $title
 * @property string url
 * @property array            $content
 * @property Collection|Tag[] $tags
 */
class ProjectTranslation extends TranslationModel
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
        'id'         => 'integer',
        'project_id' => 'integer',
        'content'    => 'array',
    ];
}
