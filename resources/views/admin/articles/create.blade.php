@extends('admin.master')

@section('content_admin')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="m-0">Add New Article</h1>
        <a href="#" class="btn btn-primary" onclick="history.back()">Return Back</a>
    </div>

    <form action="{{ route('admin.articles.store') }}" method="POST">
        @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title"  placeholder="Title" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Content</label>
                    <textarea name="content" class="form-control" placeholder="Content" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image"  class="form-control">
                </div>
        <button class="btn btn-success">Add</button>
    </form>
@stop
