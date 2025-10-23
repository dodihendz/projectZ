@extends('layouts.main')
@section('container')
<h1>Welcome to my {{ $title }} Page</h1>
<h2>My name is {{$name}}</h2>
<h3>I am 20 years old</h3>
<h3>I am a student at Universitas Dian Nuswantoro</h3>
<h3>My Email Is {{$email}}</h3>
<img src="img/{{$image}}" alt="{{$name}}" width="120px" class="img-thumbnail rounded-circle">
@endsection