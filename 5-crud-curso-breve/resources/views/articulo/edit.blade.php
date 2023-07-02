@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editando Registros</h1>
@stop

@section('content')
    <form action="/articulos/{{ $articulo->id}}" method="POST">
        <!---Token de protección para evitar error 419--->
        @csrf
        <!---Metodo Put--->
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="0.01" class="form-control" value="{{ $articulo->precio }}" tabindex="4">
        </div>
        <div>
            <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
        </div>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
