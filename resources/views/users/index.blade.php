@extends('layouts.tema')
@section('title','Usuarios')
@section('meta-description','Usuarios meta description')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Lista de usuarios</div>
        <div>
            <a href="{{ route('users.create') }}" class="btn btn-primary" title="Agregar profesor">Crear nuevo usuario</a>
        </div>
    </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table  class="table table-striped table-hover">
    <tr>
        <th scope="col" width="30">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Rol</th>
        <th width="312px" class="text-center">Acciones</th>
    </tr>
@foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
            @can('Editar Usuario')
                 <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
             @endcan
             @can('Borrar Usuario')
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Borrar',  ['class' => 'btn btn-danger btn-sm fa fa-fw fa-trash'])!!} 
                {!! Form::close() !!}
                @endcan
        </td>
    </tr>
@endforeach
</table>
{!! $data->render() !!}
@endsection