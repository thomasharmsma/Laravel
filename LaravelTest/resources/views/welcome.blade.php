@extends('layout')

@section('content')

<div class="content">
    <div class="form-card">

        <h2>Home page</h2>

        <p class="home-text">
        </p>

        <div class="home-actions">

            <form action="/participants" method="POST">
                @csrf
                <button type="submit">Participants</button>
            </form>

            <form action="/wedstrijden" method="POST">
                @csrf
                <button type="submit">Events</button>
            </form>

        </div>

    </div>
</div>

@endsection

