@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">
                    <span data-feather="x-circle"></span> Delete
                </button>
            </form>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!} {{-- {!! !!} is used to prevent XSS attack --}}
            </article>
        </div>
    </div>
</div>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
@endsection