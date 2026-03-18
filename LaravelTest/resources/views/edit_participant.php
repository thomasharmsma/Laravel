@extends('layout')

@section('content')
<h1>bewerk deelnemers</h1>

<form action="/Participant/{{ $participant->id }}/edit" method="POST">
    @csrf 
    @method('PUT')  
      
    <input type="text" name="name" placeholder="name" value="{{ $participant->name }}">
    <input type="email" name="email" placeholder="email" value="{{ $participant->email }}">
  
    <button type="submit">Bewerken</button>  
</form>

@endsection