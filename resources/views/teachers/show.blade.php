@extends('layouts.tema')
@section('title','Profesores')
@section('meta-description','Profesores meta description')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Profesor</h4>
            </div>
            <div class="col d-flex justify-content-end align-items-end">
                <a class="btn btn-primary shadow-none" href="{{ route('teachers.index') }}"><i class="fa fa-fw fa-eye"></i>Regresar</a>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $teacher->name }}
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido paterno:</strong>
                {{ $teacher->appepat }}
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido materno:</strong>
                {{ $teacher->appemat }}
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $teacher->email }}
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de teléfono:</strong>
                {{ $teacher->cel }}
            </div>
        </div>
    </div>
@endsection
