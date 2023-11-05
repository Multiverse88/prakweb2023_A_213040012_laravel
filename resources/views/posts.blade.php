@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p class="text-decoration-none">By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> In <a href="/categories/{{ $post->category->slug}}">{{ 
            $post->category->name}}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="posts/{{ $post->slug }}" class="d-block mt-3">Read more</a>
        </article>
    @endforeach
@endsection