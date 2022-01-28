@extends('layouts.admin')

@section('content')
    <h1>Products :</h1>

    @if (session('message'))
        <div class="alert alert-success my_alert position-absolute">
            {{ session('message') }}
        </div>
    @endif


    <a class="btn btn-primary" href="{{ route('admin.products.create') }}">
        <i class="fas fa-plus-square fs-2 text-white pt-1"></i>
    </a>


    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>

                    <td scope="row">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>

                        View

                        - Edit -

                        Delete

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
