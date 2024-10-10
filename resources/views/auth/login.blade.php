
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/styles.css')}}">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">UTN Activate</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Iniciar sesion</h2>
   <p>Por favor, introduzca su correo electrónico y contraseña</p>
   </div>
    <form action="{{route('login')}}"method = "post" > 
        @csrf 
        

        @include('layouts.partials.messages')



        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="password" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>
            <div class="mt-2">
            <a href="reset.html">¿Olvidó su contraseña?</a>
<div class="d-flex justify-content-center links">
						¿No tienes una cuenta? <a href="{{route('register')}}" class="ml-2">Registrate</a>
					</div>
</div>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
    </div>
</div></div></div>


</body>
</html>

