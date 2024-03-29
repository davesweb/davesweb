<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;

/**
 * @property int    $id
 * @property int    $resume_id
 * @property Resume $resume
 */
class Interest extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'        => 'integer',
        'resume_id' => 'integer',
    ];

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class, 'resume_id', 'id');
    }
}
