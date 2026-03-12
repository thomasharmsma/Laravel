
@extends('layout')

@section('content')
@yield('content')
@endsection



<form action="Participant" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">

    <button type="submit">Opslaan</button>
</form>
