<?php

namespace Database\Seeders;

use App\Models\Blog\Tag;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Database\Seeder;
use App\Models\Blog\TagTranslation;
use App\Models\Blog\PostTranslation;
use App\Models\Blog\CategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = Category::factory()
            ->has(
                CategoryTranslation::factory()
                    ->state(
                        new Sequence(
                            ['locale' => 'en'],
                            ['locale' => 'nl'],
                        )
                    )->count(2),
                'translations'
            )
            ->count(6)
            ->create()
        ;

        $tags = Tag::factory()
            ->has(
                TagTranslation::factory()
                    ->state(
                        new Sequence(
                            ['locale' => 'en'],
                            ['locale' => 'nl'],
                        )
                    )->count(2),
                'translations'
            )
            ->count(25)
            ->create()
        ;

        foreach ($categories as $category) {
            /** @var Post[] $posts */
            $posts = Post::factory()
                ->has(
                    PostTranslation::factory()
                        ->state(
                            new Sequence(
                                ['locale' => 'en'],
                                ['locale' => 'nl'],
                            )
                        )->count(2),
                    'translations'
                )
                ->for($category, 'category')
                ->count(random_int(2, 8))
                ->create()
            ;

            foreach ($posts as $post) {
                $post->tags()->saveMany($tags->random(random_int(3, 10)));
            }
        }
    }
}
