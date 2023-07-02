<!---Extendiendo la plantilla base--->
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articulos</h1>
@stop
<!---Haciendo referencia a una sección de la plantilla--->
@section('content')
    <a href="/articulos/create" class="btn btn-primary">CREAR</a>
    <br><br>
    <table id="articulos" class="table table-dark table-striped table-bordered shadow-lg mt-4 " style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!---Recibimos los datos--->
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <!---Botones que iran en la sección de Acciones--->
                    <td>
                        <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                            <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
<!---Referencia a datatables--->
@section('css')
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <!-----Contenido Js de Datatables------>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#articulos').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5,10,50, "All"]]
            });
        });
    </script>
@stop
