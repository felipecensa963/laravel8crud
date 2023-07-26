@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for=""  class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->id}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for=""  class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}"tabindex="2">
    </div>
    <div class="mb-3">
        <label for=""  class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
    </div>
    <div class="mb-3">
        <label for=""  class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="{{$articulo->precio}}"  class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection