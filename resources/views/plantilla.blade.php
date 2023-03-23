<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <aside class="col-md-3 bg-dark col-lg-2 d-md-block  sidebar h-100 position-fixed">
        <h2 class="sidebar-heading d-flex justify-content-center align-items-center py-3 text-light">Administrar <label class="text-danger py-3"> PDF</label></h2>
                <div class="sidebar-sticky text-light">
                    <ul class="nav flex-column">
                        <li class="nav-item text-center">
                            <a class="text-light active" href="{{ route('administrar') }}">
                                <i class="fas fa-tachometer-alt"></i> Inicio
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main role="main" class="col-md-10 ml-auto col-lg-10 ">
                <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarCollapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ">
                                    
                                    <a class="nav-link -toggle text-light" href="{{route('login')}}" id="" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i> Cerrar Sesion
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>



    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSvks7" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>