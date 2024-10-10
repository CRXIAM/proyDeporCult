@extends('layouts.tema')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Crear horario</div>
            <div>
                <a href="{{ route('horarios.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>

        <form action="{{ route('horarios.store') }}" method="POST">
            @csrf

            <div class="form-group">
                {{ Form::label('activ_id') }}
                {{ Form::select('activ_id',$actividads,$horario->activ_id, ['class' => 'form-control' . ($errors->has('activ_id') ? ' is-invalid' : ''), 'placeholder' => 'Schedules Id']) }}
                {!! $errors->first('activ_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="dia_semana">Día de la Semana</label>
                <select name="dia_semana" id="dia_semana" class="form-control">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hora_inicio">Hora de Inicio</label>
                <input type="time" name="hora_inicio" id="hora_inicio" class="form-control">
            </div>
            <div class="form-group">
                <label for="hora_fin">Hora Final</label>
                <input type="time" name="hora_fin" id="hora_fin" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
