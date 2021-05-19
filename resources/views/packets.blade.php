<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <div class="cards">
            @foreach($travels as $travel)
                <div class="card">
                    <h2>{{ $travel->packetName }}</h2>
                    <span>Road to:</span> {{ $travel->destination }}
                    <span>Total days:</span> {{ $travel->daysToStay }}
                    <span>Departure:</span> {{ $travel->departureDate }}
                    <h3>${{ $travel->price }}</h3>
                </div>
            @endforeach
        </div>
    </body>
</html>
