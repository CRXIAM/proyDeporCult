<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

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

    <title>UTN Activate - @yield('title')</title>
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
            <a href=" " class="logo m-0 float-start">UTN Activate</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @can('Crear Evento')
                            <li><a class="nav-link" href="/home">Eventos</a></li>
                            @endcan
                            @can('Crear Usuario')
                            <li><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                            @endcan
                            @can('Crear Rol')
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                            @endcan
                            @can('Crear Profesor')
                            <li><a class="nav-link" href="{{ route('teachers.index') }}">Profesores</a></li>
                            @endcan
                            @can('Crear Actividad')
                            <li><a class="nav-link" href="{{ route('actividads.index') }}">Actividades</a></li>
                            
                            @endcan

                            @can('Crear Inicio')
                            <li><a class="nav-link" href="{{ route('alumnos.index') }}">Inicio</a></li>     
                            @endcan
                            
                            @can('Crear Activi')
                                  <li><a class="nav-link" href="{{ route('alumnos2.index') }}">Actividades</a></li>                               
                            @endcan

                          @can('Crear Aviso')                       
                            <li><a class="nav-link" href="#">Contactos</a></li>  
                          @endcan




                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    @stack('sections')
</body>
</html>

<br>
<br>

<br>
<br>
<br>
<br>




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
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; 
              <!-- License information: https://untree.co/license/ -->
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

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
</html>
















