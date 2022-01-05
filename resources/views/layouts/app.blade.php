<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Fattura electonica') }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <!-- Bootstrap 5  -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap'>
    <!-- Additional CSS (Optional) -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Fattura navbar">
        <div class="container-fluid">
        <a class="navbar-brand bg-light" href="#">
           <img  src="{{ asset('img/mirifica.png') }}" alt="Logo de Mirifica"  width="100" height="30" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Invoice</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" href="{{ route('invoiceCreate') }}">New Invoice</a></li>
                    <li><a class="dropdown-item" href="{{ route('fileList') }}">Show Invoice</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('help') }}">Help</a>
            </li>
            </ul>
        </div>
        </div>
        </nav>
    </header>
    <!-- Begin page content -->
    <main class="container m-2 p-3">   
       
            @yield('content')


        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted"> Copyrigth mirifica 2021</span>
            </div>
        </footer>   
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
