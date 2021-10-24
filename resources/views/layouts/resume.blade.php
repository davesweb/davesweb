<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

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
                            {!! $resume->translate('about_me') !!}
                        </section>

                        <section class="experience">
                            <h2 class="text-primary">{{ __('Work experience') }}</h2>
                            <article class="striped pb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">Laravel & PHP Developer<br /><span class="text-muted fs-7">Maatwebsite, Meerssen</span></h4>
                                    <span class="text-muted ms-auto fs-7">jan 2017 - heden</span>
                                </header>
                                <p>
                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Laravel</span>
                                    <span class="badge bg-secondary">MySQL</span>
                                    <span class="badge bg-secondary">Redis</span>
                                    <span class="badge bg-secondary">Elasticsearch</span>
                                    <span class="badge bg-secondary">Docker</span>
                                    <span class="badge bg-secondary">Javascript</span>
                                    <span class="badge bg-secondary">Node</span>
                                    <span class="badge bg-secondary">Unit testing</span>
                                    <span class="badge bg-secondary">Laravel Dusk</span>
                                    <span class="badge bg-secondary">Statamic</span>
                                </footer>
                            </article>

                            <article class="striped pb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">Co-founder<br /><span class="text-muted fs-7">One Tree Concepts, Brunssum</span></h4>
                                    <span class="text-muted ms-auto fs-7">2011 - heden</span>
                                </header>
                                <p>
                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Laravel</span>
                                    <span class="badge bg-secondary">MySQL</span>
                                    <span class="badge bg-secondary">Docker</span>
                                    <span class="badge bg-secondary">Javascript</span>
                                    <span class="badge bg-secondary">Node</span>
                                    <span class="badge bg-secondary">Unit testing</span>
                                    <span class="badge bg-secondary">Online marketing</span>
                                    <span class="badge bg-secondary">Email marketing</span>
                                    <span class="badge bg-secondary">Email Feedback loops</span>
                                </footer>
                            </article>

                            <article class="striped pb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">Lead developer<br /><span class="text-muted fs-7">Ladymail, Tilburg</span></h4>
                                    <span class="text-muted ms-auto fs-7">? - 2016</span>
                                </header>
                                <p>
                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Symfony</span>
                                    <span class="badge bg-secondary">MySQL</span>
                                    <span class="badge bg-secondary">Javascript</span>
                                    <span class="badge bg-secondary">Online marketing</span>
                                    <span class="badge bg-secondary">Email marketing</span>
                                    <span class="badge bg-secondary">Email Feedback loops</span>
                                    <span class="badge bg-secondary">Spaarpgrogramma's</span>
                                </footer>
                            </article>

                            <article class="striped mb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">PHP developer<br /><span class="text-muted fs-7">Sevbo MD, Brunssum</span></h4>
                                    <span class="text-muted ms-auto fs-7">? - ?</span>
                                </header>
                                <p>
                                    In aliquam urna lectus, at volutpat quam lobortis quis. In pharetra nisl non massa aliquam rhoncus. Praesent vel commodo ipsum, ut accumsan odio. Nullam lacus augue, elementum a dictum nec, dapibus et risus. Nunc non urna nunc. Nunc et lacus dolor. Cras viverra mauris ut lacus varius scelerisque. Praesent maximus euismod porta. Donec mattis lacinia risus, eget consectetur nulla scelerisque in.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">MySQL</span>
                                    <span class="badge bg-secondary">Javascript</span>
                                    <span class="badge bg-secondary">CSS</span>
                                </footer>
                            </article>
                        </section>

                        <section class="projects mb-5">
                            <h2 class="text-primary">{{ __('Skills & proficiency') }}</h2>
                            <div class="row mb-2">
                                <div class="col-3"><strong>PHP</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>Laravel</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>SQL</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>Javascript</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>Rest API's</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>CSS, Sass, Less</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>Redis, RabbitMQ</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3"><strong>Python</strong></div>
                                <div class="col-9">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="projects">
                            <h2 class="text-primary">{{ __('Projects') }}</h2>
                            <article class="striped pb-5">
                                <header>
                                    <h4 class="fs-5">Davesweb<br /><span class="text-muted fs-7"><a href="https://davesweb.nl">https://davesweb.nl</a></span></h4>
                                </header>
                                <p>
                                    Davesweb is my personal homepage, which has had many forms in the past but is currently a blog where I write about my interests and where
                                    I keep the resume you're reading right now. It uses Laravel as it's base and it's an excellent app for me to try and experiment
                                    with new techniques and features that are too new or untested to use in a professional environment.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Laravel</span>
                                    <span class="badge bg-secondary">MySQL</span>
                                    <span class="badge bg-secondary">Redis</span>
                                    <span class="badge bg-secondary">Laravel Horizon</span>
                                    <span class="badge bg-secondary">Docker</span>
                                    <span class="badge bg-secondary">Javascript</span>
                                    <span class="badge bg-secondary">Node</span>
                                    <span class="badge bg-secondary">Unit testing</span>
                                    <span class="badge bg-secondary">Feature testing</span>
                                </footer>
                            </article>

                            <article class="striped pb-5">
                                <header>
                                    <h4 class="fs-5">Bricklink API<br /><span class="text-muted fs-7"><a href="https://github.com/davesweb/bricklink-api">Github</a></span></h4>
                                </header>
                                <p>
                                    Bricklink API is a composer package that helps you connect to and use the Bricklink API. It is setup to be used out of the box, but is completely
                                    customizable if you want more control over the connection between your app and Bricklink. The package uses the repository and transformer pattern
                                    to provide an easy and intuitive way to communicate with the API.
                                </p>
                                <p>
                                    This package recently released version 1.0.0 and is still in active development. There is also a Laravel variant of this package that wraps the
                                    functionality in some Laravel specific helpers and service providers.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Composer</span>
                                    <span class="badge bg-secondary">Docker</span>
                                    <span class="badge bg-secondary">REST API</span>
                                    <span class="badge bg-secondary">Feature testing</span>
                                </footer>
                            </article>

                            <article class="striped mb-5">
                                <header>
                                    <h4 class="fs-5">Laravel Translatable<br /><span class="text-muted fs-7"><a href="https://github.com/davesweb/laravel-translatable">Github</a></span></h4>
                                </header>
                                <p>
                                    Laravel Translatable is a composer package designed to be used in Laravel applications. It adds translation support to models by adding a translation model to the translatable model,
                                    instead of the more common way of using json columns. This has the advantage that you still have a normalized database which means there are a lot of features you can use that you
                                    can't when you're just using json columns, like indexes and advanced queries.
                                </p>
                                <p>
                                    The package is currently in active development and is being developed alongside some of my other projects that use this package.
                                </p>
                                <footer>
                                    <span class="badge bg-secondary">PHP</span>
                                    <span class="badge bg-secondary">Composer</span>
                                    <span class="badge bg-secondary">Laravel</span>
                                    <span class="badge bg-secondary">Eloquent</span>
                                    <span class="badge bg-secondary">Laravel package development</span>
                                </footer>
                            </article>
                        </section>

                        <section class="projects">
                            <h2 class="text-primary">{{ __('Education') }}</h2>
                            <article class="striped pb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">HBO Informatica<br /><span class="text-muted fs-7">Hogeschool Zuyd, Heerlen</span></h4>
                                    <span class="text-muted ms-auto fs-7">? - ?</span>
                                </header>
                                <p>
                                    Propedeuse: Ja<br />
                                    Diploma: nee
                                </p>
                            </article>

                            <article class="striped mb-5">
                                <header class="d-flex justify-content-between align-items-start">
                                    <h4 class="fs-5">HAVO<br /><span class="text-muted fs-7">Graaf Huyn College, Geleen</span></h4>
                                    <span class="text-muted ms-auto fs-7">? - ?</span>
                                </header>
                                <p>
                                    Diploma: ja
                                </p>
                            </article>
                        </section>

                    </main>
                    <aside class="col-12 col-md-3 order-0 order-md-1 mh-100 bg-primary p-0 d-flex flex-column">
                        <div class="profile text-center p-4 bg-primary-dark">
                            <img src="{{ asset('images/sam-bear.jpg') }}" class="w-50 rounded-circle" />
                            <h1 class="h2 text-primary-lighter">Dave Lemmens</h1>
                            <h2 class="h3 text-primary-lightest">Full stack developer</h2>
                        </div>
                        <div class="details py-4 px-5">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                    <i class="fa fa-at"></i> <a href="#" class="text-light">{{ __('Email me') }}</a>
                                </li>
                                <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                    <i class="fa fa-globe"></i> <a href="{{ config('app.url') }}" class="text-light">{{ config('app.url') }}</a>
                                </li>
                                <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                    <i class="fa fa-linkedin"></i> <a href="#" class="text-light">linkedin.com/in/me</a>
                                </li>
                                <li class="list-group-item bg-transparent text-light border-0 pb-0 ps-0">
                                    <i class="fa fa-github"></i> <a href="#" class="text-light">github.com/davesweb</a>
                                </li>
                            </ul>
                        </div>
                        <div class="languages py-4 px-5 text-light">
                            <h5>{{ __('Languages') }}</h5>
                            <ul class="list-unstyled">
                                <li>Dutch <span class="text-muted">(Native)</span></li>
                                <li>English <span class="text-muted">(Fluent)</span></li>
                                <li>German <span class="text-muted">(Conversational)</span></li>
                                <li>Spanish <span class="text-muted">(Basic)</span></li>
                            </ul>
                        </div>
                        <div class="interests py-4 px-5 text-light">
                            <h5>{{ __('Interests') }}</h5>
                            <ul class="list-unstyled">
                                <li>Lego sets &amp; Lego MOC's</li>
                                <li>Gaming</li>
                                <li>Formula 1</li>
                                <li>Reading</li>
                            </ul>
                        </div>
                        <div class="copyright py-4 px-5 text-light mt-auto">
                            &copy; 2005-{{ date('Y') }} - Davesweb<br />
                            <div class="fs-7 text-muted">{!! setting('copyright')->render() !!}</div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </body>
</html>
