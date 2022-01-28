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
            <tr>
                <td scope="row">{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
            </tr>
        </tbody>
    </table>


@endsection
