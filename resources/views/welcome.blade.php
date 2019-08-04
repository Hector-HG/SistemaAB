@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="text-center">Sistema de Altas y Bajas</h4>
        <h5 class="text-center">Instituto Tecnológico de Ciudad Valles</h5>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Plataforma para la realizacion de altas y bajas de materias de los alumnos del Instituto Tecnológico de Ciudad Valles
            </div>
            <div class="card-body">
                <h5 class="card-title">Indicaciones</h5>
                <p class="card-text">Plataforma de altas y bajas bienvenido</p>
                <h6>Favor de verificar horarios de materias .</h6>
                <h6>En caso de que en el horario no se muestre activa una materia que desees cursar, ir al apartado de ALTAS .</h6>
                <h6>En caso de no estar en disposición de realizar una materia ir al apartado de BAJAS.</h6>
                <br>
                <h5>Altas</h5>
                <p>Antes de solicitar el alta de una materia  verifica que no cause empalme con otras. Si no hay inconvenientes puedes solicitarla. Para solicitar la materia debes llenar un formulario con la descripción del por qué das de alta la materia y en breve se te mostrará una notificación mostrando el estado del proceso en el que vas . Al final del proceso se verá reflejado si finalizó correctamente tu petición .</p>
                <p>De lo contrario deberás acudir al departamento de ALTAS y BAJAS del plantel o con el coordinador de carrera.</p>
                <h5>Bajas</h5>
                <p>Antes de realizar una baja debes estar seguro de realizar esta opción de lo contrario podrías tener dificultades posteriores. Si no hay inconvenientes puedes solicitarla. para solicitar la materia debes llenar un formulario con la descripción del por qué das de baja la materia y en breve se te mostrará una notificación mostrando el estado del proceso en el que vas . Al final del proceso se verá reflejado si finalizó correctamente tu petición .</p>
                <p>De lo contrario deberás acudir al departamento de ALTAS y BAJAS del plantel o con el coordinador de carrera .</p>
                <div class="col text-center">
                    <a href="#" class="btn btn-dark">Realizar una solicitud</a>
                </div>
            </div>
            <div class="card-footer text-muted">
                Ciclo escolar 2019 Agosto - Diciembre
            </div>
        </div>
    </div>
@endsection