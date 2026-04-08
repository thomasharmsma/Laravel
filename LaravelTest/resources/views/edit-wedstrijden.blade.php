@extends('layout')

@section('content')

<h1>Bewerk wedstrijden</h1>

<form action="/wedstrijden/{{ $wedstrijden->id }}" method="POST">
    @csrf 
    @method('PUT')  
      <div>
     <label for="name">Naam:</label>
    <input type="text" name="name" placeholder="name" value="{{ $wedstrijden->name }}">
</div>
<div>
    <label for="date">date:</label>
    <input type="date" name="date" placeholder="date" value="{{ $wedstrijden->date }}">
     </div>
    <button type="submit">Bewerken</button>  

<div>
    <label for="location">location:</label>
    <input type="location" name="location" placeholder="location" value="{{ $wedstrijden->location }}">
     </div>
    <button type="submit">Bewerken</button>  

<div>
    <label for="deelnemers">deelnemers:</label>
    <input type="number" name="deelnemers" placeholder="aantal deelnemers" value="{{ $wedstrijden->deelnemers }}">
     </div>
    <button type="submit">Bewerken</button>  

</form>

@endsection