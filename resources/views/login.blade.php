@php
$errors = $errors ?? '';

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador Pdf</title>
    <!-- Agrega el enlace al CDN de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Agrega el estilo para el fondo gris -->
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <h1 class="display-3">Administrador <label class="text-danger">PDF</label> </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header  display-4">Iniciar sesión</div>
                <div class="card-body">
                <form method="POST" action="{{ route('loginSubmit') }}">
                                    @csrf
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="usuario" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                        </div>
                        @if($errors)
                                @if($errors->any())
                                <label class="text-danger">{{$errors->first()}}</label>
                            @endif
                        @endif
                        <button type="submit" class="btn btn-success boton">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>