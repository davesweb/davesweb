@extends('layouts.blog')

@section('content')
    <h1 class="text-secondary mb-4">{{ __('Categories') }}</h1>
    @foreach($categories->items() as $category)
        @include('blog.categories.overview_item', ['category' => $category])
    @endforeach

    {!! $categories->render('layouts.blog.pagination') !!}

@endsection
