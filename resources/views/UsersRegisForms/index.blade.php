@extends('layouts.tema')
@section('title','Profesores')
@section('meta-description','Profesores meta description')
@section('content')
<br>
<br>
<br>
<br>
   <div class="container">
    @can('Crear Formulario')


    <div class="d-flex justify-content-between py-3">
        <div class="h4">Formulario</div>
        <div>
            <a href="{{ route('UsersRegisForms.create') }}" class="btn btn-primary" title="Agregar profesor"></a>
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
            <th scope="col">Fecha de inscripción</th>
            <th scope="col">Nombre</th>
            <th scope="col">Appelido paterno</th>
            <th scope="col">Appelido materno</th>
            <th scope="col">Calle</th>
            <th scope="col">Número</th>
            <th scope="col">Colonia</th>
            <th scope="col">Código Postal</th>
            <th scope="col">Municipio</th>
            <th scope="col">Correo intitucional</th>
            <th scope="col">Número de teléfono</th>
            <th scope="col">Tipo de participante</th>
            <th scope="col">Matricula</th>
            <th scope="col">Division</th>
            <th scope="col">Grupo</th>
            <th scope="col">Grado</th>
            <th scope="col">Turno</th>
            <th scope="col">Actividad</th>
            <th width="312" class="text-center">Acciones</th>

        </tr>
        @foreach ($usersRegisForms as $usersRegisForm)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $usersRegisForm->fecha_inscripcion }}</td>
            <td>{{ $usersRegisForm->name }}</td>
            <td>{{ $usersRegisForm->appe_mat }}</td>
            <td>{{ $usersRegisForm->appe_pat }}</td>
            <td>{{ $usersRegisForm->calle }}</td>
            <td>{{ $usersRegisForm->numero }}</td>
            <td>{{ $usersRegisForm->colonia }}</td>
            <td>{{ $usersRegisForm->codigo_postal }}</td>
            <td>{{ $usersRegisForm->municipio }}</td>
            <td>{{ $usersRegisForm->cel }}</td>
            <td>{{ $usersRegisForm->email }}</td>
            <td>{{ $usersRegisForm->tipo_participante }}</td>
            <td>{{ $usersRegisForm->enrollment }}</td>
            <td>{{ $usersRegisForm->division }}</td>
            <td>{{ $usersRegisForm->grupo }}</td>
            <td>{{ $usersRegisForm->cuatrimestre }}</td>
            <td>{{ $usersRegisForm->turno }}</td>

            <td>{{ $usersRegisForm->actividad->name }}</td>
            <td>

                <form action="{{ route('UsersRegisForms.destroy',$usersRegisForm->id) }}" method="POST">






                </form>
            </td>
        </tr>
        @endforeach


    </table>
    @endcan
</div>
    {!! $usersRegisForms->links() !!}


@endsection
