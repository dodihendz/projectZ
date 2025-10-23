@extends("dashboard.layouts.main")
@section("container")
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  mb-3 border-bottom">
    <h1 class="h2">My Posts, </h1>
</div>
@if(session()->has('success'))
<div class="alert alart-success" role="alert">{{ session('success') }}</div>
@endif
<div class="table-responsive small col-lg-10">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td><a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info btn-sm">
                        <span class=" bi bi-eye align-text-bottom"></span>
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
                        <span class=" bi bi-pencil-square align-text-bottom"></span>
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm border-0" onclick="return confirm('Are you sure?')">
                            <span class="bi bi-x-circle align-text-bottom"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection