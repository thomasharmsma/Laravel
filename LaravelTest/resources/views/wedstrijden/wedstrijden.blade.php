@extends('layout')

@section('content')




<h1>Deelnemers</h1>
<ul>
   @foreach($participants as $participant)
   <li>{{ $participant->name }} - {{ $participant->email }}</li>
   <a href="/participants/{{ $participant->id }}">

      <form action="/participants/{{ $participant->id }}/" method="POST">
         @csrf
         @method('DELETE')

        <button> <type="submit"> Delete </button>

        
      </form>
    </a>

    <a href ="/participants/{{ $participant->id }}/edit"> 
      
      <button>Edit</button> </a>
   @endforeach
</ul>

@endsection

