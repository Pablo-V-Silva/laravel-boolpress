@extends('layouts.app')


@section('content')
    <h1>Post</h1>

    <div class="card">

        <img class="card-img-top myImage" src="{{ $post->image }}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{ $post->accountName }}</h4>
            <p class="card-text">{{ $post->text }}</p>
            @if ($post->category)
                <div class="category">{{ $post->category->name }}</div>
            @else
                <div class="category">No Category</div>
            @endif

            @if ($post->tag)
                <div class="tag">{{ $post->tag->name }}</div>
            @else
                <div class="tag">No tag</div>
            @endif
        </div>

    </div>

    </div>
@endsection
