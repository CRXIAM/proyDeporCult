@extends('layouts.tema')
@section('title','Horarios')
@section('meta-description','Horarios meta description')
@section('content')
<br>
<br>
<br>
<br>
<div class="container ">
    
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Editar Horario</div>
        <div>
            <a href="{{ route('horarios.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong></strong> Hubo algunos problemas con su actualización.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('horarios.update',$horario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">     
                    
                    
                <div class="form-group">
                    <input type="text" class="form-control" name="dia_semana" id="dia_semana" value="{{ $horario->dia_semana }}" readonly>
                    </div>
                    
                <div class="form-group">
                    <label for="dia_semana">Día de la Semana</label>

                    
                        
                    <select name="dia_semana" id="dia_semana" class="form-control
                    @error('dia_semana') is-invalid @enderror" value="{{ old('dia_semana',$horario->dia_semana) }}">
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sábado">Sábado</option>
                    </select>
                    
                    @error('dia_semana')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror                        
                </div>




                <div class="form-group">
            <label for="hora_inicio">Hora de Inicio</label>
            <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" value="{{ $horario->hora_inicio }}">
        </div>

        <div class="form-group">
            <label for="hora_fin">Hora Final</label>
            <input type="time" class="form-control" name="hora_fin" id="hora_fin" value="{{ $horario->hora_fin }}">
        </div>



        <div class="mb-2">
            {{ Form::label('Actividad') }}
            {{ Form::select('activ_id',$actividads,$horario->activ_id,
            ['class' => 'form-control' . ($errors->has('activ_id') ? ' is-invalid' : ''), 'placeholder' => 'Encargado de la actividad']) }}
            {!! $errors->first('activ_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>








        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
