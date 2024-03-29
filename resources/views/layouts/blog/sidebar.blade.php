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
        {!! setting('about-me')->render() !!}
    </div>
    <div class="tags p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('Tags') }}</h3>
        @foreach($tags as $tag)
            <span class="badge bg-secondary"><a href="{{ route('posts.tag', [$tag->translation()]) }}" class="text-white text-decoration-none">{{ $tag->translate('title') }}</a></span>
        @endforeach
    </div>
    <nav class="navigation p-4">
        <h3 class="h5 fst-italic fw-normal">{{ __('Archives') }}</h3>
        <ul class="list-group list-group-flush">
            @foreach($archives as $archive)
                <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-start">
                    <span class="me-auto">
                        <a href="{{ route('archives.show', [$archive->publish_year, $archive->publish_month]) }}" class="text-dark">
                            {{ ucfirst(humanDate($archive->publish_year, $archive->publish_month)) }}
                        </a>
                    </span>
                    <span class="text-muted">({{ $archive->total }})</span>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="social p-4 text-center">
        @foreach(setting('socials')->render() as $icon => $url)
            <a href="{{ $url }}" target="_blank" class="text-dark fs-3"><i class="{{ $icon }}"></i></a>
        @endforeach
    </div>
    <div class="copyright p-4">
        <span class="fs-7 text-muted fst-italic">
            &copy;2005-{{ date('Y') }} Davesweb.nl -
            {!! setting('copyright')->render() !!}
        </span>
    </div>
</nav>
