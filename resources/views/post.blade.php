@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            <h5>By.<a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->category->name}}</a> In <a href="/posts?category={{$post->category->slug}}">{{ $post->category->slug}}</a></h5>
            <!-- <p>{{ $post->body }}</p> -->
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{asset('storage/' . $post->image)}}" class="card-img-top img-fluid"
                    alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                alt="{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
            <a href="/posts">Back to Blog</a>
        </div>
    </div>
</div>
@endsection