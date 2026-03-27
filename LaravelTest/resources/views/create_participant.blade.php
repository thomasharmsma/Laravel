


@extends('layout') 

@section('content')

<h1>Voeg een deelnemer toe</h1>
<form action="/Participant" method="POST">
    @csrf
<div>
    <input type="text" name="name" placeholder="name">
    </div>
    <div>
    <input type="email" name="email" placeholder="email">
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

