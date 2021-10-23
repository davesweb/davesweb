<?php

namespace App\Models;

use Illuminate\Cache\Repository;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Davesweb\LaravelTranslatable\Traits\HasTranslations;

/**
 * @property int         $id
 * @property string      $name
 * @property int         $type
 * @property null|string $value
 */
class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    public const TYPE_STRING = 1;
    public const TYPE_TEXT   = 2;
    public const TYPE_SET    = 3;
    public const TYPE_HTML   = 4;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'id'   => 'integer',
        'type' => 'integer',
    ];

    public static function findByName(string|array $name): static|Collection
    {
        /** @var Repository $cache */
        $cache = resolve(Repository::class);

        $names = is_array($name) ? $name : [$name];

        $query = static::query();

        /** @var Collection $settings */
        $settings = $cache->rememberForever('settings-' . implode('-', $names), function () use ($query, $names) {
            return $query->whereIn('name', $names)->with('translations')->get();
        });

        return 1 === $settings->count() ? $settings->first() : $settings;
    }

    public function render(): mixed
    {
        $value = null !== $this->value ? $this->value : $this->translation()->content;

        switch ($this->type) {
            case self::TYPE_STRING:
            case self::TYPE_HTML:
                return $value;

            case self::TYPE_SET:
                return json_decode($value);
        }

        // Todo add render classes for other types

        return '';
    }
}
