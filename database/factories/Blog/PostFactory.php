<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'image'        => $this->faker->imageUrl(),
            'status'       => Post::STATUS_PUBLISHED,
            'publish_date' => now()->subDay(),
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }

    /**
     * Indicate that the post is published.
     *
     * @return Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'status'       => Post::STATUS_PUBLISHED,
                'publish_date' => now()->subDay(),
            ];
        });
    }

    /**
     * Indicate that the post is published in the future.
     *
     * @return Factory
     */
    public function future()
    {
        return $this->state(function (array $attributes) {
            return [
                'status'       => Post::STATUS_PUBLISHED,
                'publish_date' => now()->addDay(),
            ];
        });
    }

    /**
     * Indicate that the post is a draft.
     *
     * @return Factory
     */
    public function draft()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Post::STATUS_DRAFT,
            ];
        });
    }
}
