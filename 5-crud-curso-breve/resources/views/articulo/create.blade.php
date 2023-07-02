@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Creando Registros</h1>
@stop

@section('content')
    <form action="/articulos" method="POST">
        <!---Token de protección para evitar error 419--->
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" value="0.00" step="0.01" class="form-control" tabindex="4">
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
