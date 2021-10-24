<?php

namespace Database\Seeders;

use App\Models\Resume\Resume;
use Illuminate\Database\Seeder;
use App\Models\Resume\ResumeTranslation;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ResumeSeeder extends Seeder
{
    protected $aboutMeEn = '<p>
                                Hi! My name is Dave and I\'m a full stack developer with a passion for backend, although I don\'t dislike frontend work either. For the last five years I\'ve been working mainly with Laravel and
                                other apps and frameworks in the Laravel ecosystem. During that time I\'ve come to love this framework and I might say I know it inside and out.
                            </p>
                            <p>
                                I\'ve worked on many different projects over the years, from enterprise <abbr title="Know Your Customer">KYC</abbr> applications used by banks and financial institutes all over Europe,
                                to CRM systems for universities and custom solutions for many different clients.
                            </p>
                            <p>
                                Although my work has mostly been done in PHP and associated languages, the programming philosophy I use can be translated into any programming language. It\'s just a matter
                                of learning the syntax and understanding the tools. That\'s why I\'m a full stack developer that can handle any project and why I\'m a valuable addition to any team.
                            </p>
                            <p>
                                But developing software isn\'t just writing code. You need to design the app before writing a single letter of code, you need to create mockups and prototypes that need to be approved
                                by the client, there\'s planning and deadlines to adhere to with releases and patches, and of course you need to review not only your own but also each others work.
                                As a senior developer I\'m proficient in these skills as well and I can lead a team to deliver the best software they have ever delivered.
                            </p>';

    public function run(): void
    {
        $resume = Resume::factory()
            ->has(
                ResumeTranslation::factory()
                    ->state(
                        new Sequence(
                            ['locale' => 'en', 'about_me' => $this->aboutMeEn, 'title' => 'Full Stack Developer'],
                            ['locale' => 'nl', 'about_me' => $this->aboutMeEn, 'title' => 'Full Stack Developer'],
                        )
                    )->count(2),
                'translations'
            )
            ->create([
                'slug' => 'dave-lemmens',
                'name' => 'Dave Lemmens',
            ])
        ;
    }
}
