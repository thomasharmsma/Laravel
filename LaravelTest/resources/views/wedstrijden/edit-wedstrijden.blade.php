@extends('layout')

@section('content')

<h1>Bewerk wedstrijden</h1>

<form action="/participants/{{ $participant->id }}" method="POST">
    @csrf 
    @method('PUT')  
      <div>
     <label for="name">Naam:</label>
    <input type="text" name="name" placeholder="name" value="{{ $participant->name }}">
</div>
<div>
    <label for="date">date:</label>
    <input type="date" name="date" placeholder="date" value="{{ $participant->date }}">
     </div>
    <button type="submit">Bewerken</button>  

<div>
    <label for="location">location:</label>
    <input type="location" name="location" placeholder="location" value="{{ $participant->location }}">
     </div>
    <button type="submit">Bewerken</button>  


</form>

@endsection