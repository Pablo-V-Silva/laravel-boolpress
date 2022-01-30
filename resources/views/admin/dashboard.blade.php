@extends('layouts.admin')

@section('content')



    <div class="container-fluid">

        <div class="card my-2">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }} from your dashboard you can add, edit and delete stuff.
            </div>
        </div>
    </div>

@endsection
