@extends('layout')

@section('content')
<h1>Voeg een deelnemer toe</h1>
<form action="/Participant" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">

    <button type="submit">Opslaan</button>
</form>

@endsection