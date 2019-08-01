<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ControlCEET</title>
</head>
<body style="background-image: url({{ asset('img/fongo01.png')}}); background-size: cover">

@include('All.navbar')


<!-- Vistas del Home -->
<br>
<br>
<br>
<br>
<br>
<br>
@yield('home')
@yield('colombia')
@yield('restrepo')
@yield('ricaurte')
@yield('alamos')
@yield('carrera')
@yield('registrar')


@include('All.footer')

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('libs/materialize/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>


