@extends('layout')

@section('content')




<h1>wedstrijden</h1>
<ul>
   @foreach($wedstrijden as $wedstrijden)
   <li>{{ $wedstrijden->name }} - {{ $wedstrijden->date }} - {{ $wedstrijden->location }} - {{ $wedstrijden->deelnemers }}</li>
   <a href="/wedstrijden/{{ $wedstrijden->id }}">

      <form action="/wedstrijden/{{ $wedstrijden->id }}/" method="POST">
         @csrf
         @method('DELETE')

        <button> <type="submit"> Delete </button>

        
      </form>
    </a>

    <a href ="/wedstrijden/{{ $wedstrijden->id }}/edit"> 
      
      <button>Edit</button> </a>
   @endforeach
</ul>

@endsection

