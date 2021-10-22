@extends('layouts.blog')

@section('content')
    <?php
    /** @var \App\Models\Blog\Post $post */
    ?>

    <article class="summary-article">
        <h2 class="border-bottom border-primary mb-2"><a href="{{ route('posts.show', [$post->translation()]) }}" class="text-decoration-none text-primary">{{ $post->translate('title') }}</a></h2>
        <div class="meta mb-2 text-gray-400 fs-7 d-flex justify-content-between align-items-start">
            <time datetime="" class="me-2"><i class="far fa-calendar-alt"></i> October 18, 2021</time>
            <a href="{{ route('categories.show', [$post->category->translation()]) }}" class="ms-auto text-gray-400">{{ $post->category->translate('title') }}</a>
        </div>
        @if($post->image)
            <img src="{{ $post->image }}" alt="" class="w-100 mb-2" />
        @endif

        <!-- @todo render json content correcty after editor is installed -->
        {!! $post->translate('content') !!}
    </article>

@endsection
