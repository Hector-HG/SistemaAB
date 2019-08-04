@extends('layouts.app')
@section('title','Estudiante')
@section('content')
    <div class="container">
        <p class="text-center text-white bg-dark form-control">Datos del alumno</p>
        <div class="row">
            <div class="col text-center">
                <div class="form-group">
                    <label for="full-name">Nombre del alumno</label>
                    <input disabled name="full-name" id="full-name" type="text" class="form-control text-center" value="{{$user->name}} {{$user->first_surname}} {{$user->second_surname}}">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="grade">Promedio</label>
                    <input disabled name="grade" id="grade" type="text" class="form-control text-center" value="{{$user->estudiante->grade}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="form-group">
                    <label for="career">Carrera</label>
                    <input class="form-control text-center" name="career" id="career" disabled type="text"
                        value="Ingenieria en Sistemas Computacionales">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="semester">Semestre</label>
                    <input class="form-control text-center" name="semester" id="semester" disabled type="text"
                        value="{{$user->estudiante->semester}}">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="control-num">Numero de control</label>
                    <input class="form-control text-center" name="control-num" id="cotrol-num" disabled type="text"
                        value="15690342">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <p class="text-center text-white bg-dark form-control">Horario</p>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Horario</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th>1</th>
                        <td>Cincias</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="container">
        <p class="text-center text-white bg-dark form-control">Selección de nueva materia</p>
        <div class="row">
            <div class="col text-center">
                <div class="form-group">
                    <label for="full-name">Carrera</label>
                    <input disabled name="full-name" id="full-name" type="text" class="form-control text-center" value="Ingenieria en Sistemas Computacionales">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="subject">Materias disponibles</label>
                    <select class="form-control" name="subject" id="subject">
                        @foreach ($materias as $materia)
                            <option value="{{$materia->name}}">{{$materia->name}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a class="btn btn-dark text-white" type="button" href="{{ action('AltaController@index') }}">Realizar solicitud</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <p class="text-center text-white bg-dark form-control">Solicitar baja de materia</p>
        <div class="row">
            <div class="col text-center">
                <div class="form-group">
                    <label for="full-name">Carrera</label>
                    <input disabled name="full-name" id="full-name" type="text" class="form-control text-center" value="Ingenieria en Sistemas Computacionales">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="subject">Materias disponibles</label>
                    <select class="form-control" name="subject" id="subject">
                        <option value="Calculo vectorial">Calculo Vectorial</option>
                        <option value="Lenguajes y Automatas">Lenguajes y Automatas</option>
                        <option value="Inteligencia Artificial">Inteligencia Artificial</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a class="btn btn-dark text-white" type="button" href="{{ action('BajaController@index') }}">Realizar solicitud</a>
            </div>
        </div>
    </div>
@endsection