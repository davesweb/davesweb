<?php

namespace Database\Factories\Resume;

use App\Models\Resume\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeFactory extends Factory
{
    protected $model = Resume::class;

    public function definition()
    {
        return [
            'slug'  => $this->faker->slug(),
            'name'  => $this->faker->name(),
            'email' => $this->faker->email(),
        ];
    }
}
