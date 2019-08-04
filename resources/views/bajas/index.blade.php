@extends('layouts.app')
@section('title','Solicitud de alta')
@section('content')
    <div class="container">
        <p class="text-center text-white bg-dark form-control">Solicitud de baja de materia</p>
        <div class="row">
            <div class="col text-center">
                <div class="form-group">
                    <label for="full-name">Nombre del alumno</label>
                    <input disabled name="full-name" id="full-name" type="text" class="form-control text-center"
                        value="Hector Hernandez Guzmán">
                </div>
            </div>
            <div class="col text-center">
                <div class="form-group">
                    <label for="grade">Carrera</label>
                    <input disabled name="grade" id="grade" type="text" class="form-control text-center"
                        value="Ingenieria en Sistemas Computacionales">
                </div>
            </div>
        </div>
        <div class="container">
            <form action="{{ action('AltaController@store') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="semester">Semestre</label>
                            <input disabled type="text" class="form-control" id="semester" value="8 Semestre">
                        </div>
                        <div class="col">
                            <label for="subject">Materia seleccionada</label>
                            <select class="form-control" id="subject">
                                <option>Inteligenica Artificial</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="excerpt">Proporciona una breve descripción por la cual decides hacer esta solicitud</label>
                    <textarea class="form-control" id="excerpt" rows="3"></textarea>
                </div>
                <p>Verifica que todos los datos son correctos</p>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Confirmo que todos los datos ingresados son correctos
                        </label>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">Tramitar cambio</button>
            </form>
        </div>
    </div>
@endsection