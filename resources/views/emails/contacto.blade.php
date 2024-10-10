<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    h1{
        color:darkgreen;
    }
    </style>

</head>
<body>
    <h1>Confirmacion</h1>

    <p>Bienvenido {{$nombre}} se ha registrado de manera correcta tu solicitud</p>

    <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong>Apellido Paterno:</strong>{{$contacto['appe_pat']}}</p>
    <p><strong>Apellido Materno:</strong>{{$contacto['appe_mat']}}</p>
    <p><strong>Correo:</strong>{{$contacto['email']}}</p>
    <p><strong>Tipo:</strong>{{$contacto['tipo_participante']}}</p>
    <p><strong>Matricula:</strong>{{$contacto['enrollment']}}</p>
</body>
</html>
