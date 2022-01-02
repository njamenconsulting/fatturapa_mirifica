<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Fattura electonica') }}</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 


</head>
<body>
    <header class="container">
    <div class="row">
            <div class="two columns">
                <img src="{{ asset('img/mirifica.png') }}" alt="Logo de Mirifica" width="150" height="40">
            </div>

            <nav class="ten columns" >
                <a  href="{{ url('/') }}">Home</a>
                <a href="{{ route('invoiceCreate') }}"> New Invoice </a>
                <a href="{{ route('fileList') }}"> See Invoices </a>
                <a href="{{ route('about') }}"> About </a>
                <a href="{{ route('help') }}"> Help </a>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer  class="container">
        <p> Copyrigth @2021 </p>
    </footer>

</body>
</html>
