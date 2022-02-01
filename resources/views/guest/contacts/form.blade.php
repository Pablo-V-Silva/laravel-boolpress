@extends('layouts.app')

@section('content')

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Contacts us</h1>
            <p class="lead">We will help you if you need</p>

        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>


    @endif
    <div class="container">
        <form action="{{ route('contacts.send') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="name"
                    aria-describedby="helpName">
                <small id="helpName" class="text-muted">Add your account Name</small>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email"
                    aria-describedby="helpEmail">
                <small id="helpEmail" class="text-muted">Add your email@</small>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    </div>
@endsection
