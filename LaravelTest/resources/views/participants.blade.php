@extends('layout')

@section('content')

<ul>
   @foreach($participants as $participant)
   <li>{{ $participant->name }}</li>
   @endforeach
</ul>

@endsection
