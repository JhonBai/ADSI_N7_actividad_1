@extends('layout/layout')


@section('home')
    <div class="container">
        <div class="row">
            <br>
            <p class="h1">Registro de Asistencia CEET</p>
            <p class="h2">Seleccione la sede a consultar: </p>
            <div class="carousel">
                <a class="carousel-item" href="{{route('colombia')}}">Sede Colombia<img src="img/home02.png"></a>
                <a class="carousel-item" href="{{route('restrepo')}}">Sede Restrepo<img src="img/home03.png"></a>
                <a class="carousel-item" href="{{route('ricaurte')}}">Sede Ricaurte<img src="img/home04.png"></a>
                <a class="carousel-item" href="{{route('alamos')}}">Sede Alamos<img src="img/home05.png"></a>
                <a class="carousel-item" href="{{route('carrera')}}">Sede Carrera 30<img src="img/home06.jpg"></a>
            </div>
        </div>
    </div>
@endsection

