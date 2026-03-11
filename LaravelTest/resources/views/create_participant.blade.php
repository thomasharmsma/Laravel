@extends('layout')

@section('content')
@yield('content')
@endsection


<form action="deelnemers/maak" method="post">
<input type="text" name="naam" placeholder="YJV" required>
<textarea name="bericht" placeholder="Hallo" required></textarea>
<button type="submit">Verstuur</button></form>
 <div> 


<label for="name">Naam:</label>
<input type="text" id="name" name="name" required>
</div>