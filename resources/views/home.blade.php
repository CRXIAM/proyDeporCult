@extends('layouts.tema')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
  <div class="col-md-12">
    @can('Crear Evento')
  <div id='calendar'></div>
  @endcan
  <!--MODAL -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <!--  <div class="modal-dialog">-->
      <div class="modal-content">
        <div class="modal-header  bg-success">
          <h3 id="titulo" class="text-dark">Registrar evento</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
       <form id="formulario" >
          <div class="modal-body">
            <div class="form-group col-md-12">
                  <span id="titleErrorN" class="text-dark">Nombre del evento</span>
                  <input type="text" class="form-control" value="" placeholder="Nombre" id="title">
              </div>
              <br>

              <div class="form-group col-md-12">
                <span id="titleErrorD" class="text-dark">Descipción</span>
                <textarea class="form-control" placeholder="Descipción del evento" id="description" rows="4"></textarea>
              </div>
              <br>
              <div class="form-row row">
                <div class="col-md-6">
                    <div class="form-group">
                      <span id="titleErrorHI" class="text-dark">Hora inicio</span>
                      <input type="time" min="07:00" max="20:00" step="600" class="form-control" id="time_i" placeholder="Encargado">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <span id="titleErrorHF" class="text-dark">Hora final</span>
                      <input type="time" min="07:00" max="20:00" step="600" class="form-control" id="time_f" placeholder="Encargado">
                    </div>
                </div>
            </div>
          <br>
          
          <div class="form-row row">
            <div class="col-md-6">
                <div class="form-group">
                  <span id="titleErrorC" class="text-dark"> color</span>
                  <input type="color" class="form-control" id="color" placeholder="Encargado" >
                </div>
            </div>
            <div class="col-md-6">
              <br>
                <div class="form-group">
                 <!-- <span id="titleErrorF" class="text-dark"></span>
                  <input type="file" class="form-control-file" id="file" accept="image/*">-->
                </div>
                <br>
            </div>
        </div>
      <br>



          </div>
          <div class="modal-footer">              
            <button type="button" id="canBtn" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" id="saveBtn" class="btn btn-primary">Registrar</button>
            <button type="button" id="dropBtn" class="btn btn-danger" >Eliminar</button>
          </div>
       </form>  
      </div>
    </div>
  </div>
</div>
</div>
  
  

@push('sections')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/es.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

<script>
  $(document).ready(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    var booking = @json($events);
    
    $('#calendar').fullCalendar({
        lang: 'es',
        columnFormat: 'dddd',  
  header: {
        	left: 'prev,next today',
        	center: 'title',
        	right: 'month'
        },
      events: booking,
      selectable: true,
      selectHelper: true,
      
      //SELECCIONA LOS CAMPOS 
      select: function(start, end) {
        $('#saveBtn').prop('disabled',false);
        $('#dropBtn').prop('disabled',true);


        //MOSTRAR MODAL
        $('#bookingModal').modal('toggle');
        
////EVENTO PARA INSERTAR
        $('#saveBtn').click(function(){

          var title = $('#title').val();
          var description = $('#description').val();
          var time_i = $('#time_i').val();
          var time_f = $('#time_f').val();
          var color = $('#color').val();
          var start_date = moment(start).format('YYYY-MM-DD');
          var end_date = moment(end).format('YYYY-MM-DD');

          $('#title').val('');
          $('#description').val('');
          $('#time_i').val('');
          $('#time_f').val('');
          $('#color').val('');
          

          $.ajax({
            url:"{{route('home.store')}}",
            type:"POST",
            dataType: 'json',
            data:{title, description, time_i, time_f, color, start_date, end_date},
              success:function(response)
              {
                $('#bookingModal').modal('hide')
                swal("Evento creado", "", "success");
                $('#calendar').fullCalendar('renderEvent',{
                  'title':response.title,
                  'description':response.description,
                  'time_i':response.time_i,
                  'time_f':response.time_f,
                  'color':response.color,
                  'start':response.start_date,
                  'end':response.end_date,
                });
              },
              error:function(error)
              {
                if(error.responseJSON.errors){
                  $('#titleErrorN').html(error.responseJSON.errors.title);
                  $('#titleErrorD').html(error.responseJSON.errors.description);
                  $('#titleErrorHI').html(error.responseJSON.errors.time_i);
                  $('#titleErrorHF').html(error.responseJSON.errors.time_f);
                  $('#titleErrorC').html(error.responseJSON.errors.color);
                }

              },            
          });
        });
      },

      //EVENTO PARA BORRAR
      eventClick: function(event){
        $('#saveBtn').prop('disabled',true);
        $('#dropBtn').prop('disabled',false);
        $('#canBtn').prop('disabled',false);

        
        //MOSTRAR MODAL
        $('#bookingModal').modal('toggle');

          $('#title').val(event.title);
          $('#description').val(event.description);
          $('#time_i').val(event.time_i);
          $('#time_f').val(event.time_f);
          $('#color').val(event.color);
        
          $('#canBtn').click(function(){

            var id = event.id;
            
          $('#title').val('');
          $('#description').val('');
          $('#time_i').val('');
          $('#time_f').val('');
          $('#color').val('');

        $('#dropBtn').click(function(){
          
          var id = event.id;

          $('#title').val('');
          $('#description').val('');
          $('#time_i').val('');
          $('#time_f').val('');
          $('#color').val('');

          
//LLAMADA DEL EVENTO AJAX
        //LLAMADA EMERGENTE
        if(confirm('¿Seguro desea borrarlo? ')){
          $.ajax({
            //RUTA DEL EVENTO LLAMADO DEL CONTROLADOR 
            url:"{{route('home.destroy','')}}" + '/'+id,
            type:"DELETE",
            dataType: 'json',
              success:function(response)
              {
                
                $('#bookingModal').modal('hide')
                swal("Evento eliminado", "", "success");
                //LLAMADR A CALENDARIO PARA REMOVER LOS EVENTOS DE EL , SE HACE UNA LLAMADA
                $('#calendar').fullCalendar('removeEvents',response);
              },
              error:function(error)
              {
                console.log(error);

              },            
          });
        }

        });
      });

      },
      

      //EVENTO PARA ACTUALIZAR
      editable: true,
      eventDrop: function(event){
        var id = event.id;
        var start_date = moment(event.start).format('YYYY-MM-DD');
        var end_date = moment(event.start).format('YYYY-MM-DD');

        $.ajax({
            url:"{{route('home.update','') }}" +'/'+ id,
            type:"PATCH",
            dataType: 'json',
            //PARAMETROS A PASAR 
            data:{ start_date, end_date},
              success:function(response)
              {
                swal("Evento actualizado", "", "success");
              },
              error:function(error)
              {
                console.log(error);

              },            
          });
      },

   
    
  

      //EVENTO DE SELECCION
      selectAllow: function(event)
      {
        //PROHIBI HACER EVENTOS MULTIPLES
        return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,'second').utcOffset(false),'day');
      },



//CIERRA LA BIBLIOTECA DLE CALENDARIO
    });


//DESVICULA LA CREACION DE EVENTOS AL DAR CLIC EN DIFERENTES CUADROS PARA QUE NO SE CREEN
    $("#bookingModal").on("hidden.bs.modal",function(){
      $('#saveBtn').unbind();
    });
    $('.fc-event').css('font-size','17px');
    //$('.fc-event').css('widht', '95px'); 
    $('.fc').css('background-color', '#F7F7F7'); 

  });
</script>

@endpush
@endsection





