@extends('layouts.tema')
@section('title','Profesores')
@section('meta-description','Profesores meta description')
@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container ">
     <div class="d-flex justify-content-between py-3">
        <div class="h4">Crea nuevo profesor</div>
        <div>
            <a href="{{ route('teachers.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong></strong> Hubo algunos problemas con tu registro.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del profesor</label>
                    <input type="text" name="name" id="name" placeholder="Profesor" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror                        
                </div>

                <div class="mb-3">
                    <label for="appepat" class="form-label">Apellido paterno</label>
                    <input type="text" name="appepat" id="appepat" placeholder="Apellido paterno" class="form-control @error('appepat') is-invalid @enderror" value="{{ old('appepat') }}">
                    @error('appepat')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror     
                </div>
                <div class="mb-3">
                    <label for="appemat" class="form-label">Apellido materno</label>
                    <input type="text" name="appemat" id="appemat" placeholder="Apellido materno" class="form-control @error('appemat') is-invalid @enderror" value="{{ old('appemat') }}">
                    @error('appemat')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror     
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo institucional</label>
                    <input type="text" name="email" id="email" placeholder="Correo institucional" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror     
                </div>
                
                <div class="mb-3">
                    <label for="cel" class="form-label">Número telefonico</label>
                    <input type="text" name="cel" id="cel" placeholder="Celular" class="form-control @error('cel') is-invalid @enderror" value="{{ old('cel') }}">
                    @error('cel')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror     
                </div>

            </div>
        </div>

        <button class="btn btn-primary mt-3">Guardar</button>
        </div>

    </form>
</div>

    
@endsection