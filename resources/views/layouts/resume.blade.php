<?php
/** @var \App\Models\Resume\Resume $resume */
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Davesweb</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/resume.css') }}" />
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="content my-4 bg-white shadow">
                <div class="row">
                    <main class="col-12 col-md-9 mh-100 py-4 px-5 order-1 order-md-0">

                        <section class="my-profile pb-5">
                            <h2 class="text-primary">{{ __('My profile') }}</h2>
                            @include('partials.block_content', ['content' => $resume->translate('about_me')])
                        </section>

                        @if($resume->getTranslatedExperiences()->count() > 0)
                            <section class="experience">
                                <h2 class="text-primary">{{ __('Work experience') }}</h2>
                                @foreach($resume->getTranslatedExperiences() as $experience)
                                    <article class="striped {{ $loop->last() ? 'mb-5' : 'pb-5' }}">
                                        <header class="d-flex justify-content-between align-items-start">
                                            <h4 class="fs-5">{{ $experience->translate('role') }}<br /><span class="text-muted fs-7">{{ $experience->translate('location') }}</span></h4>
                                            <span class="text-muted ms-auto fs-7">{{ $experience->translate('timeframe') }}</span>
                                        </header>
                                        {!! $experience->translate('content') !!}
                                        <footer>
                                            @foreach($experience->getTranslatedTags() as $tag)
                                                <span class="badge bg-secondary">{{ $tag->translate('title') }}</span>
                                            @endforeach
                                        </footer>
                                    </article>
                                @endforeach
    {{--                            <article class="striped pb-5">--}}
    {{--                                <header class="d-flex justify-content-between align-items-start">--}}
    {{--                                    <h4 class="fs-5">Laravel & PHP Developer<br /><span class="text-muted fs-7">Maatwebsite, Meerssen</span></h4>--}}
    {{--                                    <span class="text-muted ms-auto fs-7">jan 2017 - heden</span>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel</span>--}}
    {{--                                    <span class="badge bg-secondary">MySQL</span>--}}
    {{--                                    <span class="badge bg-secondary">Redis</span>--}}
    {{--                                    <span class="badge bg-secondary">Elasticsearch</span>--}}
    {{--                                    <span class="badge bg-secondary">Docker</span>--}}
    {{--                                    <span class="badge bg-secondary">Javascript</span>--}}
    {{--                                    <span class="badge bg-secondary">Node</span>--}}
    {{--                                    <span class="badge bg-secondary">Unit testing</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel Dusk</span>--}}
    {{--                                    <span class="badge bg-secondary">Statamic</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}

    {{--                            <article class="striped pb-5">--}}
    {{--                                <header class="d-flex justify-content-between align-items-start">--}}
    {{--                                    <h4 class="fs-5">Co-founder<br /><span class="text-muted fs-7">One Tree Concepts, Brunssum</span></h4>--}}
    {{--                                    <span class="text-muted ms-auto fs-7">2011 - heden</span>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel</span>--}}
    {{--                                    <span class="badge bg-secondary">MySQL</span>--}}
    {{--                                    <span class="badge bg-secondary">Docker</span>--}}
    {{--                                    <span class="badge bg-secondary">Javascript</span>--}}
    {{--                                    <span class="badge bg-secondary">Node</span>--}}
    {{--                                    <span class="badge bg-secondary">Unit testing</span>--}}
    {{--                                    <span class="badge bg-secondary">Online marketing</span>--}}
    {{--                                    <span class="badge bg-secondary">Email marketing</span>--}}
    {{--                                    <span class="badge bg-secondary">Email Feedback loops</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}

    {{--                            <article class="striped pb-5">--}}
    {{--                                <header class="d-flex justify-content-between align-items-start">--}}
    {{--                                    <h4 class="fs-5">Lead developer<br /><span class="text-muted fs-7">Ladymail, Tilburg</span></h4>--}}
    {{--                                    <span class="text-muted ms-auto fs-7">? - 2016</span>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Symfony</span>--}}
    {{--                                    <span class="badge bg-secondary">MySQL</span>--}}
    {{--                                    <span class="badge bg-secondary">Javascript</span>--}}
    {{--                                    <span class="badge bg-secondary">Online marketing</span>--}}
    {{--                                    <span class="badge bg-secondary">Email marketing</span>--}}
    {{--                                    <span class="badge bg-secondary">Email Feedback loops</span>--}}
    {{--                                    <span class="badge bg-secondary">Spaarpgrogramma's</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}

    {{--                            <article class="striped mb-5">--}}
    {{--                                <header class="d-flex justify-content-between align-items-start">--}}
    {{--                                    <h4 class="fs-5">PHP developer<br /><span class="text-muted fs-7">Sevbo MD, Brunssum</span></h4>--}}
    {{--                                    <span class="text-muted ms-auto fs-7">? - ?</span>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">MySQL</span>--}}
    {{--                                    <span class="badge bg-secondary">Javascript</span>--}}
    {{--                                    <span class="badge bg-secondary">CSS</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}
                            </section>
                        @endif

                        @if($resume->getTranslatedSkills()->count() > 0)
                            <section class="projects mb-5">
                                <h2 class="text-primary">{{ __('Skills & proficiency') }}</h2>
                                @foreach($resume->getTranslatedSkills() as $skill)
                                    <div class="row mb-2">
                                        <div class="col-3"><strong>{{ $skill->translate('title') }}</strong></div>
                                        <div class="col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $skill->pivot->score }}%" aria-valuenow="{{ $skill->pivot->score }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>PHP</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>Laravel</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>SQL</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>Javascript</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>Rest API's</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>CSS, Sass, Less</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>Redis, RabbitMQ</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mb-2">--}}
    {{--                                <div class="col-3"><strong>Python</strong></div>--}}
    {{--                                <div class="col-9">--}}
    {{--                                    <div class="progress">--}}
    {{--                                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
                            </section>
                        @endif

                        @if($resume->getTranslatedProjects()->count() > 0)
                            <section class="projects">
                                <h2 class="text-primary">{{ __('Projects') }}</h2>
                                @foreach($resume->getTranslatedProjects() as $project)
                                    <article class="striped {{ $loop->last ? 'mb-5' : 'pb-5'}}">
                                        <header>
                                            <h4 class="fs-5">{{ $project->translate('title') }}<br /><span class="text-muted fs-7"><a href="{{ $project->translate('url') }}" target="_blank">{{ $project->translate('url') }}</a></span></h4>
                                        </header>
                                        @include('partials.block_content', ['content' => $project->translate('content')])
                                        <footer>
                                            @foreach($project->getTranslatedTags() as $tag)
                                                <span class="badge bg-secondary">{{ $tag->translate('title') }}</span>
                                            @endforeach
                                        </footer>
                                    </article>
                                @endforeach
    {{--                            <article class="striped pb-5">--}}
    {{--                                <header>--}}
    {{--                                    <h4 class="fs-5">Davesweb<br /><span class="text-muted fs-7"><a href="https://davesweb.nl">https://davesweb.nl</a></span></h4>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
{{--                                        Davesweb is my personal homepage, which has had many forms in the past but is currently a blog where I write about my interests and where--}}
{{--                                        I keep the resume you're reading right now. It uses Laravel as it's base and it's an excellent app for me to try and experiment--}}
{{--                                        with new techniques and features that are too new or untested to use in a professional environment.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel</span>--}}
    {{--                                    <span class="badge bg-secondary">MySQL</span>--}}
    {{--                                    <span class="badge bg-secondary">Redis</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel Horizon</span>--}}
    {{--                                    <span class="badge bg-secondary">Docker</span>--}}
    {{--                                    <span class="badge bg-secondary">Javascript</span>--}}
    {{--                                    <span class="badge bg-secondary">Node</span>--}}
    {{--                                    <span class="badge bg-secondary">Unit testing</span>--}}
    {{--                                    <span class="badge bg-secondary">Feature testing</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}

    {{--                            <article class="striped pb-5">--}}
    {{--                                <header>--}}
    {{--                                    <h4 class="fs-5">Bricklink API<br /><span class="text-muted fs-7"><a href="https://github.com/davesweb/bricklink-api">Github</a></span></h4>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    Bricklink API is a composer package that helps you connect to and use the Bricklink API. It is setup to be used out of the box, but is completely--}}
    {{--                                    customizable if you want more control over the connection between your app and Bricklink. The package uses the repository and transformer pattern--}}
    {{--                                    to provide an easy and intuitive way to communicate with the API.--}}
    {{--                                </p>--}}
    {{--                                <p>--}}
    {{--                                    This package recently released version 1.0.0 and is still in active development. There is also a Laravel variant of this package that wraps the--}}
    {{--                                    functionality in some Laravel specific helpers and service providers.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Composer</span>--}}
    {{--                                    <span class="badge bg-secondary">Docker</span>--}}
    {{--                                    <span class="badge bg-secondary">REST API</span>--}}
    {{--                                    <span class="badge bg-secondary">Feature testing</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}

    {{--                            <article class="striped mb-5">--}}
    {{--                                <header>--}}
    {{--                                    <h4 class="fs-5">Laravel Translatable<br /><span class="text-muted fs-7"><a href="https://github.com/davesweb/laravel-translatable">Github</a></span></h4>--}}
    {{--                                </header>--}}
    {{--                                <p>--}}
    {{--                                    Laravel Translatable is a composer package designed to be used in Laravel applications. It adds translation support to models by adding a translation model to the translatable model,--}}
    {{--                                    instead of the more common way of using json columns. This has the advantage that you still have a normalized database which means there are a lot of features you can use that you--}}
    {{--                                    can't when you're just using json columns, like indexes and advanced queries.--}}
    {{--                                </p>--}}
    {{--                                <p>--}}
    {{--                                    The package is currently in active development and is being developed alongside some of my other projects that use this package.--}}
    {{--                                </p>--}}
    {{--                                <footer>--}}
    {{--                                    <span class="badge bg-secondary">PHP</span>--}}
    {{--                                    <span class="badge bg-secondary">Composer</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel</span>--}}
    {{--                                    <span class="badge bg-secondary">Eloquent</span>--}}
    {{--                                    <span class="badge bg-secondary">Laravel package development</span>--}}
    {{--                                </footer>--}}
    {{--                            </article>--}}
                            </section>
                        @endif

                        @if($resume->getTranslatedEducations()->count() > 0)
                            <section class="education">
                                <h2 class="text-primary">{{ __('Education') }}</h2>
                                @foreach($resume->getTranslatedEducations() as $education)
                                    <article class="striped pb-5">
                                        <header class="d-flex justify-content-between align-items-start">
                                            <h4 class="fs-5">{{ $education->translate('title') }}<br /><span class="text-muted fs-7">{{ $education->translate('location') }}</span></h4>
                                            <span class="text-muted ms-auto fs-7">{{ $education->translate('timeframe') }}</span>
                                        </header>
                                        {{ $education->translate('content') }}
                                    </article>
                                @endforeach
                            </section>
                        @endif

                    </main>
                    <aside class="col-12 col-md-3 order-0 order-md-1 mh-100 bg-primary p-0 d-flex flex-column">
                        <div class="profile text-center p-4 bg-primary-dark">
                            <img src="{{ asset('images/sam-bear.jpg') }}" class="w-50 rounded-circle" />
                            <h1 class="h2 text-primary-lighter">{{ $resume->name }}</h1>
                            <h2 class="h3 text-primary-lightest">{{ $resume->translate('title') }}</h2>
                        </div>
                        <div class="details py-4 ps-5">
                            <ul class="list-group list-group-flush">
                                @if($resume->email)
                                    <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                        <i class="fa fa-at"></i> <a href="#" class="text-light" data-bs-toggle="modal" data-bs-target="#contact-modal">{{ __('Email me') }}</a>
                                    </li>
                                @endif
                                @foreach($resume->links as $link)
                                    <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                        <i class="{{ $link->icon }}"></i> <a href="{{ $link->url }}" class="text-light" target="_blank">{{ $link->url }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @if(count($resume->languages) > 0)
                            <div class="languages py-4 px-5 text-light">
                                <h5>{{ __('Languages') }}</h5>
                                <ul class="list-unstyled">
                                    @foreach($resume->getOrderedLanguages() as $language)
                                        <li>{{ langAbbrToName($language->language) }}
                                            <span class="text-muted">
                                                @switch($language->proficiency)
                                                    @case(\App\Models\Resume\Language::PROFICIENCY_NATIVE)
                                                        ({{ __('Native') }})
                                                        @break
                                                    @case(\App\Models\Resume\Language::PROFICIENCY_FLUENT)
                                                        ({{ __('Fluent') }})
                                                        @break
                                                    @case(\App\Models\Resume\Language::PROFICIENCY_CONVERSATIONAL)
                                                        ({{ __('Conversational') }})
                                                        @break
                                                    @default
                                                        ({{ __('Basic') }})
                                                @endswitch
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($resume->getTranslatedInterests()->count() > 0)
                            <div class="interests py-4 px-5 text-light">
                                <h5>{{ __('Interests') }}</h5>
                                <ul class="list-unstyled">
                                    @foreach($resume->getTranslatedInterests() as $interest)
                                        <li>{{ $interest->translate('title') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="copyright py-4 px-5 text-light mt-auto">
                            &copy; 2005-{{ date('Y') }} - Davesweb<br />
                            <div class="fs-7 text-muted">{!! setting('copyright')->render() !!}</div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <div class="modal" id="contact-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" action="{{ route('contact') }}" id="contact-form">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('Email me') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-success d-none"></div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">{{ __('Your name') }}: *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required />
                                    <div id="name-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label">{{ __('Your email address') }}: *</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required />
                                    <div id="email-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-3 col-form-label">{{ __('Your phone number') }}:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" />
                                    <div id="phone-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subject" class="col-sm-3 col-form-label">{{ __('Subject') }}: *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required />
                                    <div id="subject-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="message" class="col-sm-3 col-form-label">{{ __('Message') }}: *</label>
                                <div class="col-sm-9">
                                    <textarea name="message" id="message" class="form-control" rows="6" required>{{ old('message') }}</textarea>
                                    <div id="message-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-9 offset-3">
                                    <span class="text-muted fs-7">
                                        {{ __('Your IP address and your user agent string will also be recorded when you send a message.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/resume.js') }}"></script>
        <script defer>
            var form = new ContactForm(document.getElementById('contact-form'));
        </script>
    </body>
</html>
