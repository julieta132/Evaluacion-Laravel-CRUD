@extends('layout');
@section('contenido')
<h2>Agregar medicamento</h2>
<form action="{{ route('medicamentos.store') }}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
    @error('nombre')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
     <label for="" class="form-label">Marca</label>
    <input type="text" class="form-control" name="marca">
    @error('marca')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3 ">
     <label for="" class="form-label">Laboratorio</label>
    <input type="text" class="form-control" name="laboratorio">
    @error('laboratorio')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3 ">
     <label for="" class="form-label">Dosis</label>
    <input type="text" class="form-control" name="dosis">
     @error('dosis')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
   <div class="mb-3 ">
     <label for="" class="form-label">Imagen</label>
    <input type="file" class="form-control" name="imagen">
    @error('imagen')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection