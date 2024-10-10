@extends('layouts.tema')
@section('title','Profesores')
@section('meta-description','Profesores meta description')
@section('content')
<br>
<br>
<br>
<br>
   <div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Lista de profesores</div>
        <div>
            <a href="{{ route('teachers.create') }}" class="btn btn-primary" title="Agregar profesor">Crear nuevo profesor</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table  class="table table-striped table-hover">
                <tr>
            <th scope="col" width="30">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Appelido paterno</th>
            <th scope="col">Appelido materno</th>
            <th scope="col">Correo intitucional</th>
            <th scope="col">Número de teléfono</th>
            <th width="312" class="text-center">Acciones</th>
        </tr>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->appepat }}</td>
            <td>{{ $teacher->appemat }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->cel }}</td>
            <td>
               
                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                    <a class="btn btn-sm btn-primary"  href="{{ route('teachers.show',$teacher->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                    @can('Editar Profesor')
                    <a class="btn btn-sm btn-success" href="{{ route('teachers.edit',$teacher->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('Borrar Profesor')
                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Profesor"
                    onclick="return confirm('¿Quieres borarlo definitivamente?')" value="Borrar">
                    <i class="fa fa-fw fa-trash"></i>Borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
       

    </table>
</div>
    {!! $teachers->links() !!}

   
@endsection