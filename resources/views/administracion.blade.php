@extends('plantilla')

@section('content')
  <main role="main">
  <div class="container my-5">
    <h1 class="text-center mb-5 display-2">Administrar <label class="text-danger">PDF</label></h1>
    <div class="row justify-content-center">
      <div class="col-md-6 ml-md-5">
        <button type="button" class="btn btn-primary  col-md-10" data-toggle="modal" data-target="#modal-subir-archivo">
          Subir archivo
        </button>
      </div>
    </div>
  </div>

  <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($archivos as $archivo)
                    <tr>
                        <td>{{ $archivo->nombre }}</td>
                        <td>{{ $archivo->descripcion }}</td>
                        <td >
                            <a href="{{ route('ver', $archivo->id) }}" class="btn btn-secondary">Ver Pdf</a>
                            <a href="{{ route('editar', $archivo->id) }}" class="btn btn-primary" >Editar</a>
                            <form action="{{ route('eliminar', $archivo->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</main>

<div class="modal fade" id="modal-subir-archivo" tabindex="-1" role="dialog" aria-labelledby="modal-subir-archivo-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('crear') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="modal-subir-archivo-label">Subir PDF</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
          <div class="form-group">
            <label for="ruta">Seleccionar archivo</label>
            <input type="file" class="form-control-file" id="ruta" name="ruta" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Subir PDF</button>
        </div>
      </form>
    </div>
  </div>
</div>




@endsection

