
@include('navbar')

<div>
        @yield('content')
    </div>


<!DOCTYPE html>
<html>
<head>
    <title>Mensen lijst</title>
</head>
<body>

<h1>Mensen</h1>

<ul>    
 @foreach($people as $person)
    <li>
        {{ $person->name }} - {{ $person->email }}
    </li>
@endforeach
</ul>

</body>
</html>


<h1>deze pagina is voor gebruikers</h1>

<p>website bekijken en gebruik maken van diensten</p>



