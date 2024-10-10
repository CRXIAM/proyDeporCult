<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">   
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <style>
       #map {
        height: 100;
        
       }

    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <title>
    UTN Activate  
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start">UTN Activate</a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li class="active"><a href="#">Inicio</a></li>
              <li class="has-children">
                <a href="#">Actividades</a>
                <ul class="dropdown">
                <li><a href="./depo">Deportivas</a></li>
                <li><a href="./cult">Culturales</a></li>
                </ul>
              </li>
              <li><a href="#">Avisos</a></li>
              <li><a href="#">Contactanos</a></li>
              <li><a href="{{route('login')}}">Iniciar Sesion</a></li>
              <li><a href="{{route('register')}}">Registrate</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <br/><br/><br/><br/><br/> 

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Proximos eventos
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve1.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>Convivencia</span></div>
                    <div>
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">  
                          <span class="caption">
                             Sabado 23 de Abril
                             9:00 a.m. - 14:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve2.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>Yoga, cuida tu cuerpo</span></div>
                    <div>
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center">
                          <span class="caption">
                             Viernes 15 de Abril
                             9:00 a.m. - 12:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve3.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>De la calle a la chancha</span></div>
                    <div>
                      
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center">
                          <span class="caption">
                             Viernes 15 de Abril
                             9:00 a.m. - 12:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve4.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>Cine</span></div>
                    <div>
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">  
                          <span class="caption">
                             Sabado 23 de Abril
                             9:00 a.m. - 14:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve5.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>Clases de Salsa</span></div>
                    <div>
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">  
                          <span class="caption">
                             Sabado 23 de Abril
                             9:00 a.m. - 14:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="assets/images/eve6.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>Equipo de Basquetbol</span></div>
                    <div>
                      <span class="city d-block mb-3">Horario:</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">  
                          <span class="caption">
                             Sabado 23 de Abril
                             9:00 a.m. - 14:00 p.m.
                          </span>
                        </span>
                      </div>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Detalles</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->  
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

<br>
            <h2 class="font-weight-bold text-primary heading">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Videos
            </h2>
          <br><br><br>
<div class="row">  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;       
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/1LNsJT0zvq71XeE5RNSKlcJ7iUh2FMfOu/preview" width="350" height="200" allow="autoplay"></iframe>             
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/1BEB3BwW-ZMb_w0cGdn-ygsGZR0ExvsOU/preview" width="350" height="200" allow="autoplay"></iframe>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/1CShMwi0zzmG7Fd6UE1dOrzW6Y3UjctxM/preview" width="350" height="200" allow="autoplay"></iframe>    
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/1qlaE8rCwqmg-PjXixCB2QmZ-BzPby-ew/preview" width="350" height="200" allow="autoplay"></iframe>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/14u_pzvuFzPcfvn3b1d29ynHSuBkbKSiI/preview" width="350" height="200" allow="autoplay"></iframe>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3">
              <iframe src="https://drive.google.com/file/d/1yuqUE5xIR5hxeMjj8aWrfAiYuSWZkOq_/preview" width="350" height="200" allow="autoplay"></iframe>
          </div>
  </div>
  <br><br><br>
<div id="container">
<div id="chat-container">
    <div id="client">
         <div id="client-info">
             <h2 class="font-weight-bold text-primary heading">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Chat Asistente</h2>
         </div>
    </div>

    <br>
  <div id="chat"></div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="user-input" class= "form-control-sl" placeholder="Escriba su pregunta...">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button id="send-button" class="btn btn-primary">Enviar</button>

  </div>
  <script src="chatbot.js"></script>

</div>

  <br><br><br><br><br>

  <div id="map"></div>
    

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Ubicación</h3>
              <address>Cto. Universidad Tecnológica s/n Col. Benito Juárez</address>
              <address>Nezahualcóyotl, Estado de México, C.P. 57000 </address>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Recursos</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Visión</a></li>
                <li><a href="#">Missión</a></li>
                <li><a href="#">Terminos</a></li>
                <li><a href="#">Aviso de privaidad</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contacto</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Teléfonos: 57169700, Interior de la República: 01 (55) 5716  9700 </a></li>
                <li><a href="mailto:webmaster@utn.edu.mx">webmaster@utn.edu.mx</a>
                </li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>          
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; 
            </p>
           
          </div>
        </div>
      </div>
      <!-- /.container -->
      </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>



<script>
    //el código se ejecuta una vez que la página HTML se haya cargado completamente. 
document.addEventListener("DOMContentLoaded", function() {
  //Se obtienen elementos HTML a través de su ID y se almacenan en variables:
    const chatContainer = document.getElementById("chat-container");
    const chat = document.getElementById("chat");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");

    //evnto para que cuando el usuario haga clic se realicen algunas acciones.
    sendButton.addEventListener("click", function() {
        const userMessage = userInput.value;
        if (userMessage.trim() !== "") {
            displayUserMessage(userMessage);
            fetchBotResponse(userMessage);
            userInput.value = "";
        }
    });

    function displayUserMessage(message) {
      //Se crea un nuevo elemento y se almacena en la variable para moestrar mensaje del usuario
        const userBubble = document.createElement("div");
        userBubble.className = "user-bubble";
      //Se asigna el contenido del mensaje del usuario para mostrar el conteido.
        userBubble.textContent = message;
        chat.appendChild(userBubble);
    }
//mensajes del bot
    function displayBotMessage(message) {
        const botBubble = document.createElement("div");
        botBubble.className = "bot-bubble";
        botBubble.textContent = message;
        chat.appendChild(botBubble);
    }
// obtiene la respuesta del bot la procesa y la muestra 
    async function fetchBotResponse(userMessage) {
//await espera a que la función se complete antes de continuar la ejecución de fetchBotResponse. 
//lo que permite procesar y devolver la respuesta 
        const botResponse = await simulateBotResponse(userMessage);
        displayBotMessage(botResponse);
    }

  //toma el mensaje del usuario y busca palabras clave en el mensaje. 
  //Dependiendo de las palabras clave encontradas, el bot responde con mensajes predefinidos 
  function simulateBotResponse(userMessage) {
      const lowercaseUserMessage = userMessage.toLowerCase();

      // Expresiones regulares para buscar palabras clave
      const bayPattern = /adiós|adios|gracias/g;
      const registroPattern = /registrarte|registrarme|registrarse/g;
      const actividadesPattern = /detalles de la actividad|actividad|horario|encargado|requisitos|documentos/g;
      const eventPattern = /detalles de un evento| detalles del evento|evento/g;
      const presenPattern = /Hola|hola|ayuda/g;

    //buscar y comparar
      if (bayPattern.test(lowercaseUserMessage)) {
          return "Fue un placer ayudarte, BotAsist está a tu disposición. ";
        
      } else if (registroPattern.test(lowercaseUserMessage)) {
          return "Para poder registrarte a cualquier actividad primero tienes que iniciar sesión con tu correo escolar y  contraseña, posteriormente da clic en la actividad de tu interés, después en la parte inferior derecha te mostrará un botón que dice registrarse. ";
        
      } else if (actividadesPattern.test(lowercaseUserMessage)) {
          return "Para ver los detalles de cualquier actividad, da clic en el nombre del profesor encargado, el cual se encuentra debajo de cada imagen. Se abrirá otra ventana donde muestra los horarios, requisitos y profesor que la imparte, así como su información de contacto. ";
        
      } else if (eventPattern.test(lowercaseUserMessage)) {
          return "Para ver los detalles de cualquier evento, da clic en la imagen del evento, te mostrará los horarios, requisitos y las fechas establecidas. ";

        } else if (presenPattern.test(lowercaseUserMessage)) {
          return "Hola, soy BotAsist, estoy programado para responder preguntas relacionadas con los eventos y actividades. ¿En qué puedo ayudarte?. ";

        
      } else {
          return "Lo siento, no comprendo tu pregunta, solo puedo ayudarte a orientarte en como registrarte en alguna actividad y como ver más detalles de eventos y actividades. ";
      }
  }


});

</script>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABSgVaT0HiDFdkYp7pFi7dQ_BzrsPSoBI&callback=initMap" >
</script>
<script>

    function initMap(){

      var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: -150.644},
      zoom: 8
      });

    }

</script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
</html>