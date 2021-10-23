<article class="mb-3">
    <h2 class="h5 d-flex justify-content-between align-items-start mb-2 border-bottom">
        <a href="{{ route('categories.show', [$category->translation()]) }}" class="text-decoration-none">{{ $category->translate('title') }}</a>
        <span class="ms-auto text-muted fs-6">({{ $category->posts_count }})</span>
    </h2>
</article>
