@extends("dashboard.layouts.main")
@section("container")
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">
                <span class=" bi bi-arrow-left-circle"></span>
                back to all my posts
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
                <span class=" bi bi-pencil-square"></span>
                Edit
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure?')">
                    <span class="bi bi-x-circle align-text-bottom"></span>
                    Delete
                </button>
            </form>
            <!-- <p>{{ $post->body }}</p> -->
            <br>
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{asset('storage/' . $post->image)}}" class="card-img-top img-fluid mt-3"
                    alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3"
                alt="{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>
@endsection