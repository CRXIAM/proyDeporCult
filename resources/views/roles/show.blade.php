@extends('layouts.tema')
@section('title','Roles')
@section('meta-description','Roles meta description')
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
            <h4>Rol</h4>
        </div>
        <div class="col d-flex justify-content-end align-items-end">
            <a class="btn btn-primary shadow-none" href="{{ route('roles.index') }}"><i class="fa fa-fw fa-eye"></i>Regresar</a>
        </div>
        <br>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card"> 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del rol:</strong>
            {{ $role->name }}
        </div>
    </div>
    <br> 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permisos:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</div>
</div>
@endsection