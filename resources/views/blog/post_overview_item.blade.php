<?php
/** @var \App\Models\Blog\Post $post */
?>

<article class="summary-article">
    <h2 class="border-bottom border-primary mb-2"><a href="{{ route('posts.show', [$post->translation()]) }}" class="text-decoration-none text-primary">{{ $post->translate('title') }}</a></h2>
    <div class="meta mb-2 text-gray-400 fs-7 d-flex justify-content-between align-items-start">
        <time datetime="{{ $post->publish_date->format('Y-m-d') }}" class="me-2"><i class="far fa-calendar-alt"></i> {{ humanDate($post->publish_date->year, $post->publish_date->month, $post->publish_date->day) }}</time>
        <a href="{{ route('categories.show', [$post->category->translation()]) }}" class="ms-auto text-gray-400">{{ $post->category->translate('title') }}</a>
    </div>
    @if($post->image)
        <img src="{{ $post->image }}" alt="" class="w-100 mb-2" />
    @endif

    {!! $post->getIntro() !!}
</article>
