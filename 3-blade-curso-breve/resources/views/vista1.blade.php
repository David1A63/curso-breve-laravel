@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<h2>Contenido de la vista 1</h2>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

@php
    echo '<h1><strong>Esto es parte de la vista 1</strong></h1>';
@endphp

@endsection
