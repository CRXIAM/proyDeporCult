@extends('layouts.tema')
@section('title','Roles')
@section('meta-description','Roles meta description')
@section('content')
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Editar rol</h4>
        </div>
        <div class="col d-flex justify-content-end align-items-end">
            <a class="btn btn-primary shadow-none" href="{{ route('roles.index') }}"><i class="fa fa-fw fa-eye"></i>Regresar</a>
        </div>
        <br>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Hubo algunos problemas con su entrada.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permisos:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
        <br>
    </div>
    <div className="col d-flex justify-content-end">
        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i>Actualizar</a>
    </div>
</div>
{!! Form::close() !!}
@endsection