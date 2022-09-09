@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>NOMINA DE AREAS</h1>

@stop

@section('content')

<a href="{{ route('area.create') }}" class="btn btn-secondary mb-3">INSERTE UN AREA</a>

    <div class="table-responsive">

    <table id="areas" class="table table-dark table-bordered shadow-lg mt-4">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE Y APELLIDO</th>
                <th scope="col">CARGO</th>
                <th scope="col">UNIDAD ORGANIZACIONAL</th>
                <th scope="col">CELULAR</th>
                <th scope="col">SIGLA</th>
                <th scope="col">CARNET</th>
                <th scope="col">PISO</th>
                <th scope="col">UBICACION</th>
                <th>ACCIONES</th>
            </tr>

        </thead>

        <tbody>
            
            @foreach($areas as $area)
            <tr>
                <td>{{$area->id}}</td>
                <td>{{$area->representantes->Nombre}}</td>
                <td>{{$area->cargos->Nombre}}</td>
                <td>{{$area->Nombre}}</td>
                <td>{{$area->representantes->Celular}}</td>
                <td>{{$area->Sigla}}</td>
                <td>{{$area->representantes->Carnet}}</td>
                <td>{{$area->Piso}}</td>
                <td>{{$area->Ubicacion}}</td>
                <td>
                    <form action="{{ route('area.destroy', $area->id)}}" method="POST">
                    <a href="/area/{{  $area->id}}/edit" class="btn btn-secondary mb-4">EDITAR</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">BORRAR</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

@stop

@section('css')
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" type="/css/admin_custom.css" >
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
            $(document).ready(function () {
            $('#areas').DataTable({
                "lengthMenu": [[5, 10, 50, -1],[5, 10, 50, "ALL"]],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                    }
                    },
            });
        });
        </script>

@stop