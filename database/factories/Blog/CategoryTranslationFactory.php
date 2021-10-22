<?php

namespace Database\Factories\Blog;

use App\Models\Blog\CategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTranslationFactory extends Factory
{
    protected $model = CategoryTranslation::class;

    public function definition()
    {
        return [
            'title'  => $this->faker->words(),
            'slug'   => $this->faker->slug(),
            'locale' => $this->faker->locale(),
        ];
    }
}
