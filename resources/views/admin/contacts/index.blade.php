@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>id </th>
                <th>created_at </th>
                <th>name </th>
                <th>subject </th>
                <th>email </th>
                <th>action </th>



            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->email }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>


@endsection
