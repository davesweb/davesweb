<?php

namespace App\Models\Resume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int    $id
 * @property int    $resume_id
 * @property string $icon
 * @property string $url
 * @property Resume $resume
 */
class Link extends Model
{
    use HasFactory;

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
