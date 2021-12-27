<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Fattura electonica') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    <div id="logo">
        <img src="{{ asset('img/mirifica.png') }}" alt="Logo de Mirifica" width="112" height="28">
    </div>

    <div style="padding-left:16px">
        <h3>  <strong> {{ $details['title'] }}</strong></h3>
        <p>{{ $details['body'] }}</p>
        </br></br>

        <p>Thank you!</p>

    </div>
</body>
</html>


