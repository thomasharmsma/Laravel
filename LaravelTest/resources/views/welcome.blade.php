@include('navbar')

<div>
    @yield('content')

</div>




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>visclub</title>





</div>

</head>
    <body>
        <h1>visclub</h1>  
        <p>deze website is voor bezoekers van de visclub </p> 
       <div> 

          <h1>bent u een gebruiker of beheerder</h1>


  <a href="user">
        <button >
            User
        </button>
    </a>

    <br><br>

    <a href="admin">
        <button >
            Admin
        </button>
    </a>



<form action="Participant" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">

    <button type="submit">Opslaan</button>
</form>

<h2>Geregistreerde deelnemers</h2>

@if(isset($participants) && $participants->count())
    @foreach($participants as $participant)
        <div>
            <p><strong>name:</strong> {{ $participant->name }}</p>
            <p><strong>email:</strong> {{ $participant->email }}</p>
        </div>
        <hr>
    @endforeach
@else
    <p>Geen deelnemers geregistreerd.</p>
@endif


</body>






</html>
