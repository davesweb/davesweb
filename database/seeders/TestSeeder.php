<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Blog\Tag;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Database\Seeder;
use App\Models\SettingTranslation;
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

        $this->aboutMe();
        $this->socials();
        $this->copyright();
    }

    private function aboutMe()
    {
        $aboutMe       = new Setting();
        $aboutMe->name = 'about-me';
        $aboutMe->type = Setting::TYPE_HTML;
        $aboutMe->save();

        $aboutMeEn          = new SettingTranslation();
        $aboutMeEn->content = <<<'HTML'
        <p>
            I\'m a full-stack software developer with 12 years experience. I write about PHP, Laravel, SQL and software development in general. I also write about my hobbies which includes Lego sets & Lego MOC\'s, crypto currency and much more.
        </p>
        <p>
            Want to know more about me? Check out <a href="">my resume</a> or find me on social media.
        </p>
        HTML;

        $aboutMeNl          = new SettingTranslation();
        $aboutMeNl->content = <<<'HTML'
        <p>
            Ik ben een full-stack software developer met 12 jaar ervaring. Ik schrijf over PHP, Laravel, SQL en software development in het algemeen. Ik schrijf ook over mijn hobbies zoals Lego sets en MOC's, crypto currency en meer.
        </p>
        <p>
            Wil je meer weten? Bekijk hier <a href="">mijn CV</a> of vind me op social media.
        </p>
        HTML;

        $aboutMe->translations()->saveMany([$aboutMeEn, $aboutMeNl]);
    }

    private function socials()
    {
        $socials        = new Setting();
        $socials->name  = 'socials';
        $socials->type  = Setting::TYPE_SET;
        $socials->value = json_encode([
            'fa fa-github-square'  => 'https://github.com/davesweb',
            'fa fa-twitter-square' => 'https://twitter.com/dwllemmens',
            'fa fa-reddit-square'  => 'https://www.reddit.com/user/davekuh',
        ]);
        $socials->save();
    }

    private function copyright()
    {
        $aboutMe       = new Setting();
        $aboutMe->name = 'copyright';
        $aboutMe->type = Setting::TYPE_HTML;
        $aboutMe->save();

        $aboutMeEn          = new SettingTranslation();
        $aboutMeEn->content = <<<'HTML'
        The source code for this website is open source and available on <a href="https://github.com/davesweb" target="_blank">my Github</a>.
        All content is licenced under the <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY license</a> unless stated otherwise.
        HTML;

        $aboutMeNl          = new SettingTranslation();
        $aboutMeNl->content = <<<'HTML'
        De broncode van deze website is open source en beschikbaar op <a href="https://github.com/davesweb" target="_blank">mijn Github</a>.
        Alle inhoud is gelicentieerd onder de <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY licentie</a> behalve als anders aangegeven.
        HTML;

        $aboutMe->translations()->saveMany([$aboutMeEn, $aboutMeNl]);
    }
}
