@extends('layouts.blog')

@section('content')
    @foreach($posts->items() as $post)
        @include('blog.post_overview_item', ['post' => $post])
    @endforeach

    {!! $posts->render('layouts.blog.pagination') !!}

@endsection
