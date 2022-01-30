@extends('layouts.app')


@section('content')
    <h1>Product</h1>

    <div class="card">

        <img class="card-img-top" src="{{ $product->image }}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>
            <p class="card-text">{{ $product->desc }}</p>
            <div class="price">{{ $product->price }}</div>
        </div>
    @endsection
