@extends('layouts.tema')
@section('title','Usuarios')
@section('meta-description','Usuarios meta description')
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
            <h4>Usuario</h4>
        </div>
        <div class="col d-flex justify-content-end align-items-end">
            <a class="btn btn-primary shadow-none" href="{{ route('users.index') }}"><i class="fa fa-fw fa-eye"></i>Regresar</a>
        </div>
        <br>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">      
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $user->name }}
        </div>
    </div>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rol:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </div>
    </div>
</div>
</div>
</div>
@endsection