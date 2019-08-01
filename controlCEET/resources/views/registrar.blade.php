@extends('layout/layout')


@section('registrar')
    <div class="container">
        <div class="row">
            <p class="h1">Formulario de Registro</p>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nombres</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="id" type="text" class="validate">
                        <label for="id">Id Sena</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="program" type="text" class="validate">
                        <label for="program">Programa</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

            </form>
        </div>

    </div>



@endsection