@extends('admin.master')

@section('content_admin')

@if (session('msg'))
<div class="alert alert-{{ session('type') }}">
    {{ session('msg') }}
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="m-0">All article</h1>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Add New</a>
</div>

<table class="table table-hover table-striped table-bordered text-center">
    <tr class="bg-dark text-white">
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Content</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
   @forelse ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->image }}</td>
            <td>{{ $article->content }}</td>
            <td>12 Dec, 2022</td>
            <td>
                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
   @empty
        <tr >
            <td colspan="5" class="text-center">Not Data Found</td>
        </tr>
   @endforelse
</table>

{{ $articles->links() }}
@stop

@section('script')
    <script>
          setTimeout(() => {
            $('.alert').fadeOut();
        }, 3000);
    </script>
@stop
