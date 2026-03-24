@extends('layout')

@section('content')

<h1>bewerk deelnemers</h1>

<form action="/participant/{{ $participant->id }}" method="POST">
    @csrf 
    @method('PUT')  
      <div>
     <label for="name">Naam:</label>
    <input type="text" name="name" placeholder="name" value="{{ $participant->name }}">
</div>
<div>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="email" value="{{ $participant->email }}">
     </div>
    <button type="submit">Bewerken</button>  
</form>

@endsection