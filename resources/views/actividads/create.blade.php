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
            <div class="h4">Crea nueva actividad</div>
            <div>
                <a href="{{ route('actividads.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>

        <form action="{{ route('actividads.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de la actividad</label>
                        <input type="text" name="name" id="name" placeholder="Actividad" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror                        
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción de la actividad</label>
                        <input type="text" name="description" id="description" placeholder="Descripción" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
                        @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror     
                    </div>
                    <div class="mb-2">
                        {{ Form::label('Profesor asignado') }}
                        {{ Form::select('teachers_id',$teachers,$actividad->teachers_id,
                        ['class' => 'form-control' . ($errors->has('teachers_id') ? ' is-invalid' : ''), 'placeholder' => 'Encargado de la actividad']) }}
                        {!! $errors->first('teachers_id', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <br> 
                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror  
                        <div class="pt-3">
                            <img  id="imagenSeleccionada" style="max-height: 300px"/> 
                        </div>
                        
                    </div>                
                </div>
            </div>

            <button class="btn btn-primary mt-3">Guardar actividad</button>

        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e){
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
    });
});
</script>

@endsection