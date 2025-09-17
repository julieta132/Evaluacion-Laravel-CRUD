@extends('layout')
@section('contenido')
<h1>Index</h1>
<a href="{{ route('medicamentos.create') }}"  class="btn btn-primary">Nuevo</a>
<table class="table table-info table-striped mt-4">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">marca</th>
        <th scope="col">laboratorio</th>
        <th scope="col">dosis</th>
        <th scope="col">imagen</th>
        <th scope="col">acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($medicamentos as $medicamento)
    <tr>
        <td>{{$medicamento->id}}</td>
        <td>{{$medicamento->nombre}}</td>
        <td>{{$medicamento->marca}}</td>
        <td>{{$medicamento->laboratorio}}</td>
        <td>{{$medicamento->dosis}}</td>
        <td><img src="{{asset('imagenes/'.$medicamento->imagen)}}" style="width: 100px; heigth: 100px;" ></td>
        <td>
            <form action="{{route ('medicamentos.destroy',$medicamento->id)}}" method="post">
            <a href="/medicamentos/{{$medicamento->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection