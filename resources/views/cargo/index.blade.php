@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>NOMINA DE CARGOS</h1>

@stop

@section('content')
 
<a href="/cargo/create" class="btn btn-secondary mb-3">INSERTAR CARGO</a>

<div class="table-responsive">

    <table id="cargos" class="table table-dark table-bordered shadow-lg mb-4">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-center">NOMBRE</th>     
                <th scope="col" class="text-center">ACCIONES</th>
                
            </tr>

        </thead>

        <tbody>
            
            @foreach($cargos as $cargo)
            <tr>
                <td>{{$cargo->id}}</td>
                <td>{{$cargo->Nombre}}</td>
                <td>
                    
                    <form action="{{ route('cargo.destroy', $cargo->id)}}" method="POST">
                    <a href="/cargo/{{$cargo->id}}/edit" class="btn btn-secondary ">EDITAR</a>
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
            $('#cargos').DataTable({
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