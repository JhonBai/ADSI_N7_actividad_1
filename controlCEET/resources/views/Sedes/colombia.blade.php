@extends('layout/layout')


@section('colombia')

<div class="container">
    <div class="row">
        <p class="h1">Sede Barrio Colombia</p>
    </div>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s4"><a href="{{route('registrar')}}">Registrar</a></li>
                <li class="tab col s4"><a class="active" href="">Asistencia</a></li>
                <li class="tab col s4"><a href="">Consultar</a></li>
            </ul>
        </div>
    </div>
</div>


@endsection