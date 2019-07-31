@extends('layout/layout')


@section('home')
    <div class="Home" style="background-image: url('IMG/fondoHome2.jpg');">
        <div class="" style="padding: 50px">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10">
                    <center><div class="FontTitulo3" >
                            Bienvenid@ a Synergias Magister una plataforma dedicada al mejoramiento de la calidad educativa en Colombia.
                        </div></center>
                </div>
                <div class="col s1"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <center><div class="FontParrafo1white" >
                        Generamos distinción y reconocimiento a los proyectos y actividades que desas realizar. Contamos con el apoyo
                        de cientos de maestros y de redes investigativas para brindarte la mejor experiencia de servicio.
                    </div></center>
            </div>
            <br><br>
            <div class="row">
                <div class="ButtonHome">
                    <a class="buttonsHome" href="{{ route('Home') }}">Iniciar Sesion</a>
                </div>
            </div>
        </div>
    </div>
@endsection

