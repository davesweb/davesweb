<?php

namespace Database\Factories\Blog;

use App\Models\Blog\PostTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTranslationFactory extends Factory
{
    protected $model = PostTranslation::class;

    public function definition()
    {
        return [
            'title'       => $this->faker->sentence(),
            'slug'        => $this->faker->slug(),
            'description' => $this->faker->text(),
            'content'     => [],
        ];
    }
}
