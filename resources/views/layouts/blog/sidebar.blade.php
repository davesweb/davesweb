<nav class="sidebar col-4 order-1 bg-light">
    <div class="logo p-4">
        <h1><a href="{{ route('homepage') }}" class="logo-text">Davesweb</a></h1>
        <div class="locales">
            @foreach($availableLocales as $abbr => $locale)
                <a href="{{ localeUrl($abbr) }}"><span class="{{ $locale['icon'] }}" title="{{ $locale['name'] }}"></span></a>
            @endforeach
        </div>
    </div>
    <div class="search p-4">
        <form method="get" action="{{ route('posts.search') }}">
            <div class="input-group">
                <input type="search" name="q" class="form-control p-3 border-secondary" placeholder="{{ __('Type something and hit enter') }}" aria-label="{{ __('Search') }}" aria-describedby="search-button" value="{{ request()->get('q') }}" />
                <button type="submit" class="btn btn-outline-secondary" id="search-button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <nav class="navigation p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('Categories') }}</h3>
        <ul class="list-group list-group-flush">
            @foreach($categories as $category)
                <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-start">
                    <span class="me-auto"><a href="{{ route('categories.show', [$category->translation()]) }}" class="text-dark">{{ $category->translate('title') }}</a></span>
                    <span class="text-muted">({{ $category->posts_count }})</span>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="text-block p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('About me') }}</h3>
        <p>
            {{ __('I\'m a full-stack software developer with 12 years experience. I write about PHP, Laravel, SQL and software development in general. I also write about my hobbies which includes Lego sets & Lego MOC\'s, crypto currency and much more.') }}
        </p>
        <p>
            {!! __('Want to know more about me? Check out <a href="">my resume</a>, find me on social media or leave a comment here on my blog.') !!}
        </p>
    </div>
    <div class="tags p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('Tags') }}</h3>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">PHP</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Laravel</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">CSS</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Code reviews</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Lego set</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">MOC</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Package</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Project</a></span>
        <span class="badge bg-secondary"><a href="#" class="text-white text-decoration-none">Personal</a></span>
    </div>
    <nav class="navigation p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('Archives') }}</h3>
        <ul class="list-group list-group-flush">
            @foreach($archives as $archive)
                <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-start">
                    <span class="me-auto">
                        <a href="{{ route('archives.index', [$archive->publish_year, $archive->publish_month]) }}" class="text-dark">
                            {{ ucfirst(humanDate($archive->publish_year, $archive->publish_month)) }}
                        </a>
                    </span>
                    <span class="text-muted">({{ $archive->total }})</span>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="social p-4 text-center">
        <a href="https://github.com/davesweb" title="Github" target="_blank" class="text-dark fs-3"><i class="fa fa-github-square"></i></a>
        <a href="https://twitter.com/dwllemmens" title="Twitter" target="_blank" class="text-dark fs-3"><i class="fa fa-twitter-square"></i></a>
        <a href="https://www.reddit.com/user/davekuh" title="Reddit" target="_blank" class="text-dark fs-3"><i class="fa fa-reddit-square"></i></a>
    </div>
    <div class="copyright p-4">
        <span class="fs-7 text-muted fst-italic">
            &copy;2005-{{ date('Y') }} Davesweb.nl -
            {!! __('The source code for this website is open source and available on <a href="https://github.com/davesweb" target="_blank">my Github</a>.') !!}
            {!! __('All content is licenced under the <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY license</a> unless stated otherwise.') !!}
        </span>
    </div>
</nav>
