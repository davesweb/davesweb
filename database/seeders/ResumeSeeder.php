<?php

namespace Database\Seeders;

use App\Models\Resume\Resume;
use Illuminate\Database\Seeder;
use App\Models\Resume\ResumeTranslation;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ResumeSeeder extends Seeder
{
    protected $aboutMeEn = '{
    "time" : 1635160946297,
    "blocks" : [
        {
            "id" : "LlrYcRrT3b",
            "type" : "paragraph",
            "data" : {
                "text" : "Hi! My name is Dave and I\'m a full stack developer with a passion for backend, although I don\'t dislike frontend work either. For the last five years I\'ve been working mainly with Laravel and other apps and frameworks in the Laravel ecosystem. During that time I\'ve come to love this framework and I might say I know it inside and out."
            }
        },
        {
            "id" : "UBwLw7Yk00",
            "type" : "paragraph",
            "data" : {
                "text" : "I\'ve worked on many different projects over the years, from enterprise KYC applications used by banks and financial institutes all over Europe, to CRM systems for universities and custom solutions for many different clients."
            }
        },
        {
            "id" : "418IL49h_x",
            "type" : "paragraph",
            "data" : {
                "text" : "Although my work has mostly been done in PHP and associated languages, the programming philosophy I use can be translated into any programming language. It\'s just a matter of learning the syntax and understanding the tools. That\'s why I\'m a full stack developer that can handle any project and why I\'m a valuable addition to any team."
            }
        },
        {
            "id" : "qXlwE8sNWd",
            "type" : "paragraph",
            "data" : {
                "text" : "But developing software isn\'t just writing code. You need to design the app before writing a single letter of code, you need to create mockups and prototypes that need to be approved by the client, there\'s planning and deadlines to adhere to with releases and patches, and of course you need to review not only your own but also each others work. As a senior developer I\'m proficient in these skills as well and I can lead a team to deliver the best software they have ever delivered."
            }
        }
    ],
    "version" : "2.22.2"
}';

    public function run(): void
    {
        $resume = Resume::factory()
            ->has(
                ResumeTranslation::factory()
                    ->state(
                        new Sequence(
                            ['locale' => 'en', 'about_me' => json_decode($this->aboutMeEn), 'title' => 'Full Stack Developer'],
                            ['locale' => 'nl', 'about_me' => json_decode($this->aboutMeEn), 'title' => 'Full Stack Developer'],
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
