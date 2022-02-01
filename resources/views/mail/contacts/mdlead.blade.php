@component('mail::message')
    # Introduction

    {{ $data['message'] }}

    @component('mail::panel', ['url' => '$url'])

        Name: {{ $data['name'] }}

        Email: {{ $data['email'] }}

    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
