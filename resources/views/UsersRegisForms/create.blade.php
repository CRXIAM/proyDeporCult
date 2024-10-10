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
            <div class="h4">Formulario</div>
            <div>
                <a href="{{ route('UsersRegisForms.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>

        <form action="{{ route('UsersRegisForms.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">


                    <div class="container">
                        <h2>1. Fecha de inscripción:</h2>
                        <label for="fecha_inscripcion" class="form-label">Fecha de inscripcion</label>
                        <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" placeholder="" class="form-control @error('fecha_inscripcion') is-invalid @enderror" value="{{ old('fecha_inscripcion')}}">
                        @error('fecha_inscripcion')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2>2. Datos personales:</h2>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="appe_mat" class="form-label">Apellido paterno:</label>
                        <input type="text" name="appe_mat" id="appe_mat"  class="form-control @error('appe_mat') is-invalid @enderror" value="{{ old('appe_mat') }}">
                        @error('appe_mat')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="appe_pat" class="form-label">Apellido materno:</label>
                        <input type="text" name="appe_pat" id="appe_pat"  class="form-control @error('appe_pat') is-invalid @enderror" value="{{ old('appe_pat') }}">
                        @error('appe_pat')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2>3. Domicilio:</h2>

                    <div class="mb-3">
                        <label for="calle" class="form-label">Calle:</label>
                        <input type="text" name="calle" id="calle"  class="form-control @error('calle') is-invalid @enderror" value="{{ old('calle') }}">

                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" name="numero" id="numero"  class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') }}">

                        <label for="colonia" class="form-label">Colonia:</label>
                        <input type="text" name="colonia" id="colonia"  class="form-control @error('colonia') is-invalid @enderror" value="{{ old('colonia') }}">

                        <label for="codigo_postal" class="form-label">Código Postal:</label>
                        <input type="text" name="codigo_postal" id="codigo_postal"  class="form-control @error('codigo_postal') is-invalid @enderror" value="{{ old('codigo_postal') }}">


                        @error('calle','numero','colonia','codigo_postal')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form">
                        <label for="municipio" class="form-label">Municipio:</label>
                        <select name= "municipio" id="inputmunicipio" class="form-control" @error('municipio') is-invalid @enderror" value="{{ old('municipio') }}">
                           <option value=""></option>
                           <option value="municipio1">Nezahualcóyotl</option>
                           <option value="municipio2">Chimalhuacán</option>
                           <option value="municipio3">Ecatepec</option>
                           <option value="municipio4">Texcoco</option>
                           <option value="municipio5">Valle de Bravo</option>
                           <option value="municipio6">Ixtapaluca</option>
                           <option value="municipio7">Chalco</option>
                           <option value="municipio8">La Paz</option>
                           <option value="municipio9">Azcapotzalco</option>
                           <option value="municipio10">Gustavo A. Madero</option>
                           <option value="municipio11">Iztacalco</option>
                           <option value="municipio12">Xochimilco</option>
                           <option value="municipio13">Venustiano Carranza</option>
                           <option value="municipio14">Tláhuac</option>
                        </select>
                        @error('municipio')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cel" class="form-label">Número telefonico</label>
                        <input type="text" name="cel" id="cel"  class="form-control @error('cel') is-invalid @enderror" value="{{ old('cel') }}">
                        @error('cel')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo institucional</label>
                        <input type="text" name="email" id="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2>4. Señalar tipo de participante:</h2>

                    <div class="form">
                        <label for="tipo_participante" class="form-label">Tipo de participante:</label>
                        <select name= "tipo_participante" id="inputtipo_participante" class="form-control" @error('tipo_participante') is-invalid @enderror" value="{{ old('tipo_participante') }}">
                           <option value=""></option>
                           <option value="estudiante">Estudiante</option>
                           <option value="admi_docente">Administr. y o Docente</option>
                           <option value="man_med">Man.Med y Sup Personal</option>
                           <option value="externo">Externos</option>
                        </select>
                        @error('tipo_participante')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="enrollment" class="form-label">Matricula:</label>
                        <input type="text" name="enrollment" id="enrollment"  class="form-control @error('enrollment') is-invalid @enderror" value="{{ old('enrollment') }}">
                        @error('enrollment')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2>5. División:</h2>

                    <div class="form">
                        <label for="division" class="form-label">Division:</label>
                        <select name= "division" id="inputdivision" class="form-control" @error('division') is-invalid @enderror" value="{{ old('division') }}">
                           <option value=""></option>
                           <option value="administracion">Administracion</option>
                           <option value="informatica">Informatica</option>
                           <option value="tecnologia Ambiental">Tecnologia Ambiental</option>
                           <option value="comercializacion">Comercializacion</option>
                           <option value="gestion de la produccion">Gestion de la produccion</option>
                           <option value="telematica">Telematica</option>
                        </select>
                        @error('division')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="grupo" class="form-label">Grupo:</label>
                        <input type="text" name="grupo" id="grupo"  class="form-control @error('grupo') is-invalid @enderror" value="{{ old('grupo') }}">
                        @error('grupo')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form">
                        <label for="cuatrimestre" class="form-label">Grado:</label>
                        <select name= "cuatrimestre" id="inputcuatrimestre" class="form-control" @error('cuatrimestre') is-invalid @enderror" value="{{ old('cuatrimestre') }}">
                           <option value=""></option>
                           <option value="grado1">Primero</option>
                           <option value="grado2">Segundo</option>
                           <option value="grado3">Tercero</option>
                           <option value="grado4">Cuarto</option>
                           <option value="grado5">Quinto</option>
                           <option value="grado6">Sexto</option>
                           <option value="grado7">Septimo</option>
                           <option value="grado8">Octavo</option>
                           <option value="grado9">Noveno</option>
                           <option value="grado10">Decimo</option>
                           <option value="grado11">Onceavo</option>
                        </select>
                        @error('cuatrimestre')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form">
                        <label for="turno" class="form-label">Turno:</label>
                        <select name= "turno" id="inputturno" class="form-control" @error('turno') is-invalid @enderror" value="{{ old('turno') }}">
                           <option value=""></option>
                           <option value="turno1">Matutino</option>
                           <option value="turno2">Vespertino</option>
                        </select>
                        @error('turno')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2>6. Actividad a participar:</h2>

                    <div class="mb-2">

                        <div class="form-group">
                            {{ Form::label('Actividad') }}
                            {{ Form::select('activities_id',$actividads,$usersRegisForms->activities_id, ['class' => 'form-control' . ($errors->has('activities_id') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
                            {!! $errors->first('activities_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

</div>









                </div>
            </div>

            <button class="btn btn-primary mt-3">Registrar</button>

        </form>

    </div>


@endsection
