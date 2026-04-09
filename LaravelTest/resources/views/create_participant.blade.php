
@extends('layout')

@section('content')

<div class="content">
    <div class="form-card">

        <h2>Voeg een deelnemer toe</h2>

        <form action="/Participant" method="POST">
            @csrf

            <label for="name">Naam</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Naam"
            >

            <label for="email">E-mail</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="E-mail"
            >

            <button type="submit">Opslaan</button>
        </form>

        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>

@endsection


