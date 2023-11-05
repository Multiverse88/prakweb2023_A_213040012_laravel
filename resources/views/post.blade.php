@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title}}</h1>

        <p>By. Ainan in <a href="/categories/{{ $post->category->slug}}">{{ 
            $post->category->name}}</a></p>

        {!! $post->body !!}
    </article>
    
    <a href="/posts">Back to Posts</a>
@endsection