


@extends('layout') 

@section('content')

<h1>Voeg een wedstrijd toe:</h1>
<form action="/Wedstrijd" method="POST">
    @csrf
<div>
    <input type="text" name="name" placeholder="name">
    </div>
    <div>
    <input type="date" name="date" placeholder="date">
    </div>
    <div>
    <input type="location"  name="location" placeholder="location">
    </div>

    <button type="submit">Opslaan</button>
</form>

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 


@endsection