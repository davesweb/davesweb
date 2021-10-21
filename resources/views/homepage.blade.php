@extends('layouts.blog')

@section('content')
    <article class="summary-article">
        <h2 class="border-bottom border-primary mb-2"><a href="#" class="text-decoration-none text-primary">The title of this article</a></h2>
        <div class="meta mb-2 text-gray-400 fs-7 d-flex justify-content-between align-items-start">
            <time datetime="" class="me-2"><i class="far fa-calendar-alt"></i> October 18, 2021</time>
            <a href="#" class="text-gray-400 text-decoration-none"><i class="far fa-user"></i> Dave</a>
            <a href="#" class="ms-auto text-gray-400">Category</a>
        </div>
        <img src="{{ asset('images/wall-e.jpg') }}" alt="" class="w-100 mb-2" />
        <p>
            This is the first paragraph of this item. It is the intro to this item, and should be
            around four to five sentences long, to make sure it takes up some space on the homepage.
            It should also have an image above the intro, the grab the attention of the reader.
        </p>
    </article>
@endsection
