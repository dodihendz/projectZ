@extends("dashboard.layouts.main")
@section("container")
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  mb-3 border-bottom">
    <h1 class="h2">Posts Categories </h1>
</div>
@if(session()->has('success'))
<div class="alert alart-success col-lg-6" role="alert">{{ session('success') }}</div>
@endif
<div class="table-responsive small col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-info btn-sm">
                        <span class=" bi bi-eye align-text-bottom"></span>
                    </a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm">
                        <span class=" bi bi-pencil-square align-text-bottom"></span>
                    </a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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