<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
