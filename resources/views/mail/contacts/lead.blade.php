<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>You have a new Lead!</h1>

    <p>
        <em>Name: {{ $contact['name'] }}</em>
        <em>Email: {{ $contact['email'] }}</em>

    </p>
    <div class="message">
        {{ $contact['message'] }}
    </div>
</body>

</html>
