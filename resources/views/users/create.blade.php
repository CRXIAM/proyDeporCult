@extends('layouts.tema')
@section('title','Usuarios')
@section('meta-description','Usuarios meta description')
@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="container ">
    <div class="d-flex justify-content-between py-3">
       <div class="h4">Crea nuevo usuario</div>
       <div>
           <a href="{{ route('users.index') }}" class="btn btn-primary">Regresar</a>
       </div>
   </div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong></strong> Hubo algunos problemas con tu resgistro.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="card border-0 shadow-lg">
    <div class="card-body">
        <div class="mb-3">
            <strong>Nombre completo:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre completo','class' => 'form-control')) !!}
        </div>
    <div class="mb-3">
            <strong>Correo institucional:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Correo institucional','class' => 'form-control')) !!}
        </div>
        <div class="mb-3">
            <strong>Contraseña:</strong>
            {!! Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control')) !!}
    </div>
    <div class="mb-3">
            <strong>Confirmar contraseña:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirmar contraseña','class' => 'form-control')) !!}
    </div>
    <div class="mb-3">
            <strong>Rol:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
        <br>
    </div>
</div>
    
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    

{!! Form::close() !!}
@endsection