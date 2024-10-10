@extends('layouts.tema')
@section('title','Actividades')
@section('meta-description','Actividades meta description')
@section('content')
<br>
<br>
<br>
<br>
    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Lista de actividades</div>
            <div>
                <a href="{{ route('actividads.create') }}" class="btn btn-primary">Crear nueva actividad</a>
            </div>
        </div>

        <div class="d-flex justify-content-between py-3">

            <div>
                <a href="{{ route('horarios.index') }}" class="btn btn-success btn-sm" id="btn-ver">Gestionar horario</a>



            </div>
        </div>


        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th scope="col" width="30">Id</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre de la actividad</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Profesor asignado</th>
                        <th width="354" class="text-center">Acciones</th>
                    </tr>

                    @if($actividads->isNotEmpty())
                    @foreach ($actividads as $actividad)
                    <tr valign="middle">
                        <td>{{ ++$i }}</td>
                        <td>
                            @if($actividad->image != '' && file_exists(public_path().'/uploads/actividades/'.$actividad->image))
                            <img src="{{ url('uploads/actividades/'.$actividad->image) }}" alt="" width="80" height="80">
                            @else
                            <img src="{{ url('assets/images/no-image.png') }}" alt="" width="80" height="80" class="rounded-circle">
                            @endif
                        </td>
                        <td>{{ $actividad->name }}</td>
                        <td>{{ $actividad->description }}</td>
                        <td>{{ $actividad->teacher->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('actividads.show',$actividad->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                            <a href="{{ route('actividads.edit',$actividad->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" onclick="deleteActividad({{ $actividad->id }})" class="btn btn-danger btn-sm">Eliminar</a>

                            <form id="actividad-edit-action-{{ $actividad->id }}" action="{{ route('actividads.destroy',$actividad->id) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @else
                    <tr>
                        <td colspan="6"><h5>No hay actividades registradas aún</h5></td>
                    </tr>
                    @endif

                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $actividads->links() }}
        </div>

    </div>



<script>
    function deleteActividad(id) {
        if (confirm("¿Segur@ de que quieres eliminar?")) {
            document.getElementById('actividad-edit-action-'+id).submit();
        }
    }
</script>




@endsection
