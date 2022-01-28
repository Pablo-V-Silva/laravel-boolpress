@extends('layouts.admin')

@section('content')
    <h1>Products :</h1>

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

                        View - Edit - Delete

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
