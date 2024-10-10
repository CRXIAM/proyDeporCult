@extends('layouts.tema')
@section('title','Roles')
@section('meta-description','Roles meta description')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Crear nuevo rol</h4>
            </div>
            <div class="col d-flex justify-content-end align-items-end">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="fa fa-fw fa-eye"></i>Regresar</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con tu entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permisos:</strong>
                <br />
                @foreach ($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                        {{ $value->name }}</label>
                    <br />
                @endforeach
            </div>
            <br>
        </div>
        <div className="col d-flex justify-content-end">
            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i>Crear</a>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
