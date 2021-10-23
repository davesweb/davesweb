<?php

namespace Database\Factories\Blog;

use App\Models\Blog\TagTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagTranslationFactory extends Factory
{
    protected $model = TagTranslation::class;

    public function definition()
    {
        return [
            'title'  => $this->faker->word(),
            'slug'   => $this->faker->slug(),
            'locale' => $this->faker->locale(),
        ];
    }
}
