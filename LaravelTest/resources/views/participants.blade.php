@extends('layout')

@section('content')




<h1>Deelnemers</h1>
<ul>
   @foreach($participants as $participant)
   <li>{{ $participant->name }} - {{ $participant->email }}</li>
   @endforeach
</ul>

@endsection
