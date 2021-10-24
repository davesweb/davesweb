<?php

namespace Database\Factories\Resume;

use App\Models\Resume\ResumeTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeTranslationFactory extends Factory
{
    protected $model = ResumeTranslation::class;

    public function definition()
    {
        return [
            'title'    => $this->faker->title(),
            'about_me' => [],
        ];
    }
}
