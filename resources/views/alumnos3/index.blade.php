@extends('layouts.tema')
@section('title','Actividades')
@section('meta-description','Actividades meta description')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row mb-4 align-items-center">
  <div class="col-lg-4">
    <h2 class="font-weight-bold text-primary heading">Actividades</h2>
  </div>
</div>
    <div class="container">
      <div class="row">
        @forelse ($actividads as $actividad)
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
          <p><h2 class="h5 text-primary mb-4">{{ $actividad->name }}</h2></p>
          <img src="/uploads/actividades/{{$actividad->image}}" alt="Image" class="img-fluid"/>
          <p>
            <h3 class="mb-0"><a href="{{ url ('/box')}}">{{ $actividad->teacher->name }}</a></h3><p>
          </div>
        </div>

        @empty <p>NO HAY ACTIVIDADES PUBLICADOS AÚN</p>
        @endforelse
      </div>
    </div>



    @endsection
