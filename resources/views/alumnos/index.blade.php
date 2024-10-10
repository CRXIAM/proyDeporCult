@extends('layouts.tema')
@section('title','alumnos')
@section('meta-description','Alumnos')
@section('content')
<br>
<br>
<br>

<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">Proximos eventos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="property-slider-wrap">
          <div class="property-slider">
            @forelse ($events as $event)
            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="assets/images/eve1.jpg" alt="Image" class="img-fluid" />
              </a>
              <div class="property-content">
                <div class="price mb-2"><span>{{ $event->title }}</span></div>
                <div>
                  <span class="city d-block mb-3">Día del evento {{ $event->start_date }}</span>
                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">de {{ $event->time_i}} . </span>
                      <span class="caption"> a {{$event->time_f}}.</span>
                    </span>
                  </div>
                  <a href="property-single.html" class="btn btn-primary py-2 px-3">Detalles</a>
                </div>
              </div>
            </div>
            <!-- .item -->
            @empty <p>NO HAY EVENTOS PUBLICADOS AúN</p>
            @endforelse
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
  </div>
</div>












    @endsection
