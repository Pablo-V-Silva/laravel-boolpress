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
                <label for="accountName" class="form-label">account name</label>
                <input placeholder="Add Name" type="text" class="form-control" name="accountName" id="accountName"
                    aria-describedby="helpName" placeholder="Name" value="{{ old('accountName') }}" required>
                <small id="helpName" class="form-text text-muted">Add name on your post</small>
            </div>

            <div>
                <label for="text" class="form-label">text</label>
                <textarea placeholder="Add text" type="text" class="form-control" name="text" id="text"
                    aria-describedby="helpName" placeholder="text" value="{{ old('text') }}"></textarea>
                <small id="helpName" class="form-text text-muted">Add text on your post</small>
            </div>

            <div class="form-group">
                <label for="category_id">Categories</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option selected disabled>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    ​
                </select>
            </div>

            <div>
                <label for="image" class="form-label">image</label>
                <input placeholder="Add image" type="text" class="form-control" name="image" id="image"
                    aria-describedby="helpName" placeholder="image" value="{{ old('image') }}">
                <small id="helpName" class="form-text text-muted">Add image on your post</small>
            </div>

            <button name="" id="" class="btn btn-primary" href="" type="submit">Save</button>

        </form>
    </div>

@endsection
