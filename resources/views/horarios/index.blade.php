@extends('layouts.tema')

@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Horarios</div>

            <div>
                <a href="{{ route('horarios.create') }}" class="btn btn-primary mb-3">Crear Horario</a>
            </div>
        </div>

        <div class="d-md-flex justify-content-md-between">
        <form action="{{ route('horarios.index') }}" method="GET" class="form-inline">
            <div class="btn-group">
            <input  type="text" name="busqueda" placeholder="Buscar por día de la semana..."  class="form-control mr-sm-4">
            <button type="submit" class="btn btn-success my-2 my-sm-0">Buscar</button>
        </div>
        </form>
    </div>



        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Día de la Semana</th>
                    <th>Hora de Inicio</th>
                    <th>Hora Final</th>
                    <th>Actividad</th>
                    <th width="354" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                    <tr>
                        <td>{{ $horario->dia_semana }}</td>
                        <td>{{ $horario->hora_inicio }}</td>
                        <td>{{ $horario->hora_fin }}</td>
                        <td>{{ $horario->actividad->name }}</td>
                        <td>
                            <a href="{{ route('horarios.edit',$horario->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" onclick="deleteHorario({{ $horario->id }})" class="btn btn-danger btn-sm">Eliminar</a>
                            
                            <form id="horario-edit-action-{{ $horario->id }}" action="{{ route('horarios.destroy',$horario->id) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            {!! $horarios->links() !!}
        </div>
    </div>


    <script>
        function deleteHorario(id) {
            if (confirm("¿Segur@ de que quieres eliminar?")) {
                document.getElementById('horario-edit-action-'+id).submit();
            }
        }
    </script>
@endsection
