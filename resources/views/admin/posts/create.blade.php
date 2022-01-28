@extends('layouts.admin')


@section('content')

    <div class="container mt-5">
        <div class="back">
            <a class="pb-4 text-decoration-none" href="{{ route('admin.posts.index') }}">
                <-- BACK </a>
        </div>

        <h1>Create your Prod </h1>


        <form class="mb-3" method="post" action="{{ route('admin.posts.store') }}">
            @csrf

            <div>
                <label for="name" class="form-label">Name</label>
                <input placeholder="Add Name" type="text" class="form-control" name="name" id="name"
                    aria-describedby="helpName" placeholder="Name" value="{{ old('name') }}" required>
                <small id="helpName" class="form-text text-muted">Add name on your post</small>
            </div>

            <div>
                <label for="desc" class="form-label">Description</label>
                <input placeholder="Add Descpription" type="text" class="form-control" name="desc" id="desc"
                    aria-describedby="helpDesc" placeholder="Description" value="{{ old('desc') }}">
                <small id="helpDesc" class="form-text text-muted">Add Desc on your post</small>
            </div>
            <div>
                <label for="image" class="form-label">Image</label>
                <input placeholder="Add Image" type="text" class="form-control" name="image" id="image"
                    aria-describedby="helpDesc" placeholder="Add url link" value="{{ old('image') }}">
                <small id="helpDesc" class="form-text text-muted">Add Image on your post</small>
            </div>

            <div>
                <label for="price" class="form-label">Price</label>
                <input placeholder="Add Price" type="text" class="form-control" name="price" id="price"
                    aria-describedby="helpDesc" placeholder="Add url link" value="{{ old('price') }}">
                <small id="helpDesc" class="form-text text-muted">Add Image on your post</small>
            </div>

            <button name="" id="" class="btn btn-primary" href="" type="submit">Save</button>

        </form>
    </div>

@endsection
