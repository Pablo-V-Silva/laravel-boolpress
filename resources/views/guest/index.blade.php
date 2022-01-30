@extends('layouts.app')

@section('content')
    <h1 class="titleHome text-center">Wecolme to our site</h1>
    <div class="container">
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eius saepe, qui incidunt
            quibusdam eligendi nisi voluptatum molestias. Corrupti, quae?</p>

        <div class="container-fluid mt-5">

            <div class="introduction text-center">
                <h2 class="pt-5 pb-4 bold">Our products</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vel nihil fugiat nisi illum quaerat, fuga
                    optio excepturi fugit soluta.</p>
            </div>



            <div class="row row-cols-5">
                @foreach ($products as $product)
                    <div class="col">
                        <a href="{{ route('guest.show', ['id' => $product->id, 'type' => 'product']) }}">
                            <div class="card">

                                <img class="card-img-top" src="{{ $product->image }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <p class="card-text">{{ $product->desc }}</p>
                                    <div class="price">{{ $product->price }}</div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="fsSection text-center">
                <h2 class="pt-5 pb-4 bold">Our Posts</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vel nihil fugiat nisi illum quaerat, fuga
                    optio excepturi fugit soluta.</p>
            </div>

            <div class="row row-cols-5">
                @foreach ($posts as $post)
                    <div class="col">
                        <a href="{{ route('guest.show', ['id' => $post->id, 'type' => 'post']) }}">
                            <div class="card">

                                <img class="card-img-top" src="{{ $post->image }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $post->accountName }}</h4>
                                    <p class="card-text">{{ $post->text }}</p>

                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
