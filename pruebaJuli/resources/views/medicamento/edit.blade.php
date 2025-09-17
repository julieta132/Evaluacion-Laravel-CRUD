@extends('layout')

@section('contenido')
<h2>Editar medicamento</h2>

<form action="{{ route('medicamentos.update', $medicamento->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $medicamento->nombre) }}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input type="text" class="form-control" name="marca" value="{{ old('marca', $medicamento->marca) }}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Laboratorio</label>
    <input type="text" class="form-control" name="laboratorio" value="{{ old('laboratorio', $medicamento->laboratorio) }}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Dosis</label>
    <input type="text" class="form-control" name="dosis" value="{{ old('dosis', $medicamento->dosis) }}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <img src="{{ asset('imagenes/'.$medicamento->imagen) }}" alt="imagen actual">  
</div>
<div class="mb-3">
    <label for="imagen" class="form-label">Nueva Imagen</label>
    <input type="file" class="form-control" name="imagen">
  </div>

  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
