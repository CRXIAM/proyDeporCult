@extends('layouts.tema')
@section('title','Usuarios')
@section('meta-description','Roles meta description')
@section('content')
<br>
<br>
<br>
<br>

<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Lista de roles</div>
        <div>
            <a href="{{ route('roles.create') }}" class="btn btn-primary" title="Agregar rol">Crear nuevo rol</a>
        </div>
    </div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table  class="table table-striped table-hover">
    <tr>
        <th scope="col" width="50">Id</th>
        <th scope="col">Nombre</th>
        <th width="340" class="text-center">Acciones</th>
    </tr>
    
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
            @can('Editar Rol')
                <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
            @endcan
            @can('Borrar Rol')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm fa fa-fw fa-trash'])!!} 
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
</div>
{!! $roles->render() !!}
@endsection