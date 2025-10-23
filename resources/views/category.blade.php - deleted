{{-- @dd($posts)  sama seperti var_dum --}}
@extends('layouts.main')

@section('container')
@foreach ($posts as $pst)
<article class=" mb-5 border-bottom pb-3">
    <h1>Post Category : {{ $category }}</h1>
    <h2>
        <a href="/posts/{{$pst->slug}}"> {{ $pst->title }}</a>
    </h2>
    <h5>By. {{ $pst->author->username }}</h5>
    <p>{{ $pst->excerpt }}</p>
</article>
@endforeach
@endsection