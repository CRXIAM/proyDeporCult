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




    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">

        <div class="col-lg-7 mx-auto text-center">
          <h3 class="mb-4">Boxeo</h3>
        </div>


    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">


                <div class="property-item">
                  <a href="property-single.html" class="img">
                  <img src="{{asset('assets/images/Box_2.jpg')}}" alt="Image" class="img-fluid"/>
                  </a>
                      </div>

                <div class="property-item">
                  <a href="property-single.html" class="img">
                  <img src="{{asset('assets/images/Box.png')}}" alt="Image" class="img-fluid"/>
                  </a>
                      </div>

                       <div class="property-item">
                  <a href="property-single.html" class="img">
                  <img src="{{asset('assets/images/Box_3.jpg')}}" alt="Image" class="img-fluid"/>
                  </a>
                      </div>

                <div class="property-item">
                  <a href="property-single.html" class="img">
                  <img src="{{asset('assets/images/Box_4.png')}}" alt="Image" class="img-fluid"/>
                  </a>
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
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
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
              <h3 class="mb-3">Horarios</h3>
              <p>
              Lunes, martes y jueves
              13:30 a 18:30 horas
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature">
              <h3 class="mb-3">Encargado</h3>
              <p>
              Victoria Torrres  Canul
              <p>Teléfonos: 57169700 <p>
              <a href="victoria.torresca@utn.edu.mx">victoria.torresca@utn.edu.mx</a>

              </p>
            </div>
          </div>
          <div class="col-6 col-lg-5" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature">
              <h3 class="mb-3">Requisitos</h3>
              <p>
                -Certificado médico<p>
                -Credencial del estudiante vigente<p>
                -Número de afilación del seguro facultativo
              </p>
            </div>
          </div>



        </div>
      </div>
    </section>




    <section class="features-1">
      <div class="container">
        <div class="row">


    <div class="col-lg-7 mx-auto text">
          <h2 class="font-weight-bold heading text-primary mb-4">
              Objetivo   </h2>
            <p class="text-black-50">
              Tener disponibilidad en competencias y exhibición, así como enriquecer el perfil profesional del alumnado.
            </p>

        </div>


        <div class="col-6 col-lg-5" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature">
            <p>
            <a class="btn btn-primary" href="{{ route('UsersRegisForms.create') }}">Registrarme</a>
          </p>
            </div>
          </div>




        </div>
      </div>

      @endsection


















