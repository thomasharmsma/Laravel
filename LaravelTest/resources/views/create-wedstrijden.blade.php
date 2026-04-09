@extends('layout')

@section('content')

<div class="content">
    <div class="form-card">

        <h2>Voeg een wedstrijd toe</h2>

        <form action="/wedstrijden" method="POST">
            @csrf

            <label for="name">Naam</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Naam"
            >

            <label for="date">Datum</label>
            <input
                type="date"
                id="date"
                name="date"
                value="{{ old('date') }}"
            >

            <label for="location">Locatie</label>
            <input
                type="text"
                id="location"
                name="location"
                value="{{ old('location') }}"
                placeholder="Locatie"
            >

            <label for="deelnemers">Aantal deelnemers</label>
            <input
                type="number"
                id="deelnemers"
                name="deelnemers"
                value="{{ old('deelnemers') }}"
                placeholder="Aantal deelnemers"
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
