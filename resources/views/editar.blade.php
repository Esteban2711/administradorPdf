@extends('plantilla')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5 display-2">Administrar <label class="text-danger">PDF</label></h1>
    <div class="row justify-content-center">
      <div class="col-md-6 ml-md-5">
      <h1 class="text-center mb-5 display-4">EDITAR <label class="text-danger">PDF</label></h1>
      </div>
    </div>
  </div>

  <div class=" col-12">
  <form action="{{ route('actualizar', $archivo->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
        <div class="form-group ">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control col-6" id="nombre" name="nombre" value="{{ $archivo?->nombre ?? ''}}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Description:</label>
                <textarea class="form-control col-6" id="descripcion" name="descripcion" rows="3" required>{{ $archivo?->descripcion ?? '' }}</textarea>
            </div>
          <div class="form-group">
            <label for="ruta">Seleccionar archivo</label>
            <input type="file" class="form-control-file" id="ruta" name="ruta" required>
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Editar</button>
    
      </form>
      </div>
@endsection