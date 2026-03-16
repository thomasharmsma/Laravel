@extends('layout')

@section('content')




<h1>Deelnemers</h1>
<ul>
   @foreach($participants as $participant)
   <li>{{ $participant->name }}</li>
   @endforeach
</ul>

@endsection
