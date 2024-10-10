@extends('layouts.tema')
@section('title','Actividades')
@section('meta-description','Actividades meta description')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Detalles de la Actividad</div>
        <div>
            <a href="{{ route('actividads.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>

    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Nombre de la actividad</th>
                <th scope="col">Descripción</th>
                <th scope="col">Profesor asignado</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td>
                        @if($actividad->image != '' && file_exists(public_path().'/uploads/actividades/'.$actividad->image))
                        <img src="{{ url('uploads/actividades/'.$actividad->image) }}" alt="" width="80" height="80">
                        @else
                        <img src="{{ url('assets/images/no-image.png') }}" alt="" width="80" height="80" class="rounded-circle">
                        @endif
                    </td>
                    <td>{{ $actividad->name }}</td>
                    <td>{{ $actividad->description }}</td>
                    <td>{{ $actividad->teacher->name }}</td>
                </tr>
        </tbody>
    </table>
    <br>
    <br>        
    <div class="h5">Horarios de la Actividad</div>
    @if ($horarios->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Día de la Semana</th>
                    <th>Hora de Inicio</th>
                    <th>Hora Final</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                    <tr>
                        <td>{{ $horario->dia_semana }}</td>
                        <td>{{ $horario->hora_inicio }}</td>
                        <td>{{ $horario->hora_fin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron horarios para esta actividad.</p>
    @endif

    
</div>
@endsection
