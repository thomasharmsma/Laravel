<?php
@extends(view : 'layout')

@section(section: 'content')


<h1>deze pagina is voor de deelnemers van de visclub</h1>

<ul>
   @foreach($participants as $participant)
   <li>{{ $participant->name }}</li>
   @endforeach
</ul>
