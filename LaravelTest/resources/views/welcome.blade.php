
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Visclub</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('navbar')

<main class="container">
    <h1 class="title">Visclub</h1>

    <p class="subtitle">
        Deze website is voor bezoekers van de visclub
    </p>

    <section class="card">
        <h2>Bent u een gebruiker of beheerder?</h2>

        <div class="button-group">
            <a href="/participants" class="btn">Deelnemers</a>
            <a href="/admin" class="btn btn-secondary">Admin</a>
        </div>
    </section>
</main>

</body>
</html>

