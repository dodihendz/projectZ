{{-- @dd($posts)  sama seperti var_dum --}}
@extends('layouts.main')

@section('container')
<article class=" mb-5 border-bottom pb-3">
    <h2>Categories</h2>
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{$category->slug}}">
                    <div class="card text-bg-dark text-white">
                        <img src="img/img1.png" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{$category->slug}}">
                    {{ $category->name }}
                </a>
            </h2>
        </li>
    </ul>
    @endforeach -->
    @endsection