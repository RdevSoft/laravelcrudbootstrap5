@extends('layouts.plantillabase')

@section('contenido')
    <h2>EDITAR REGISTRO</h2>

    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3>
    <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
        </div>

        <div class="mb-3>
    <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
        </div>

        <div class="mb-3>
    <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$articulo->cantidad}}">
        </div>

        <div class="mb-3>
    <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" value="{{$articulo->precio}}">
        </div>

        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection
