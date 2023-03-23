@extends('plantilla')

@section('content')
    <div class="container">
        <h1>{{ $archivos->nombre }}</h1>
        <p>{{ $archivos->Descripcion }}</p>
        <embed src="{{ asset('storage/archivos/' . $archivos->ruta) }}" width="100%" height="600">
        <a href="{{ route('editar', $archivos->id) }}" class="btn btn-primary mt-3">Editar</a>
        <form action="{{ route('eliminar', $archivos->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
        </form>
    </div>
@endsection