@extends('layouts.admin')

@section('content')
    <div class="dataPosts">

        <h1>Posts :</h1>

        @if (session('message'))
            <div class="alert alert-success my_alert position-absolute">
                {{ session('message') }}
            </div>
        @endif


        <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">
            <i class="fas fa-plus-square fs-2 text-white pt-1"></i>
        </a>


        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>account name</th>
                    <th>post</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>

                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->accountName }}</td>
                        <td>{{ $post->text }}</td>


                        <td>

                            View

                            - Edit -

                            Delete

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
