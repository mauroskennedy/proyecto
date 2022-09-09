@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>REGISTRO DE REPRESENTANTES</h1>

@stop

@section('content')
 
<a href="{{ route('representante.create') }}" class="btn btn-secondary mb-3">INSERTAR REPRESENTANTE</a>

<div class="table-responsive">

    <table id="representantes" class="table table-dark table-bordered shadow-lg mt-4">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>     
                <th scope="col">CELULAR</th>
                <th scope="col">CARNET</th>
                <th>ACCIONES</th>
                
            </tr>

        </thead>

        <tbody>
            
            @foreach($representantes as $representante)
            <tr>
                <td>{{$representante->id}}</td>
                <td>{{$representante->Nombre}}</td>
                <td>{{$representante->Celular}}</td>
                <td>{{$representante->Carnet}}</td>
                <td>
                    <form action="{{ route('representante.destroy', $representante->id)}}" method="POST">
                    <a href="/representante/{{$representante->id }}/edit" class="btn btn-secondary ">EDITAR</a>
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

<link rel="stylesheet" type="/css/admin_custom.css" >
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
            $(document).ready(function () {
            $('#representantes').DataTable({
                "lengthMenu": [[300, -1],["ALL"]],
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