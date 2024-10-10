
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

<div class="container">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">

      <div class="col-lg-7 mx-auto text-center">
        <h3 class="mb-4">Natación</h3>
      </div>

        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="{{asset('assets/images/a_4.jpg')}}" alt="Image" class="img-fluid"/>
                </a>

                    </div>

              <div class="property-item">
                <a href="property-single.html" class="img">
                <img src="{{asset('assets/images/a_6.jpg')}}" alt="Image" class="img-fluid"/>
                </a>
                    </div>

              <div class="property-item">
                <a href="property-single.html" class="img">
                <img src="{{asset('assets/images/a_3.jpg')}}" alt="Image" class="img-fluid"/>
                </a>
                    </div>

                     <div class="property-item">
                <a href="property-single.html" class="img">
                <img src="{{asset('assets/images/a_2.jpg')}}" alt="Image" class="img-fluid"/>
                </a>
                    </div>

              <div class="property-item">
                <a href="property-single.html" class="img">
                <img src="{{asset('assets/images/a_3.jpg')}}" alt="Image" class="img-fluid"/>
                </a>
                    </div>

              <div class="property-item">
                <a href="property-single.html" class="img">
                <img src="{{asset('assets/images/a_6.jpg')}}" alt="Image" class="img-fluid"/>
                </a>
                    </div>
                  </div>
            <div
              id="property-nav"
              class="controls"
              tabindex="0"
              aria-label="Carousel Navigation"
            >
              <span
                class="prev"
                data-controls="prev"
                aria-controls="property"
                tabindex="-1"
                >Anterior</span
              >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Siguiente</span
              >

              </div>
          </div>
        </div>
      </div>




  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <h3 class="mb-3">Horario</h3>
            <p>
            Lunes a viernes de 13:00 a 17:00 hrs.
            </p>
          </div>
        </div>
        <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="box-feature">
            <h3 class="mb-3">Encargado</h3>
            <p>
              Evangelina Juárez Hernández
            <p>Teléfono: 57169700 <p>
            <a href="evangelina.juarezhe@utn.edu.mx">evangelina.juarezhe@utn.edu.mx</a>

            </p>
          </div>
        </div>
        <div class="col-6 col-lg-5" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <h3 class="mb-3">Requisitos</h3>
            <p>
                -Llenado del fomulario de solicitud de inscripción
               <p>
                -Certificado médico vigente (examen podológico).
              <p>
                -Copia de tu alta en el seguro facultativo .
              <p>
                -Credencial vigente de la UTN.
            </p>
          </div>
        </div>



      </div>
    </div>



  <div class="col-lg-7 mx-auto text">
        <h2 class="font-weight-bold heading text-primary mb-4">
            Objetivo   </h2>
          <p class="text-black-50">

          </p>

      </div>

      <div class="d-flex justify-content-between py-3">
        <div class="h4"></div>
        <div>
            <a href="{{ route('UsersRegisForms.create') }}" class="btn btn-primary">Registrar</a>
        </div>
    </div>



      </div>
    </div>






    @endsection
