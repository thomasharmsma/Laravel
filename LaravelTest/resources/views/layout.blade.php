<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>visclub</title>
     </head>
    <body>
        @include('navbar')  <!-- Navbar altijd bovenaan -->

        @yield('content')   <!-- Hier komt de pagina-inhoud -->

        
         
    </body>
</html>