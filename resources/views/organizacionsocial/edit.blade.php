@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

@section('content')
	
	<h2>EDITAR ORGANIZACION SOCIAL</h2>

<form action="/organizacionsocial/{{$organizacionsocial->id }}" method="POST">

	@csrf
	@method('PUT')
	<div class="mb-3">
		<label for="" class="form-label">Nombre:</label>
		<input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$organizacionsocial->Nombre}}">
	</div>
	
	<div class="mb-3">
		<label for="" class="form-label">Sigla:</label>
		<input id="Sigla" name="Sigla" type="text" class="form-control" value="{{$organizacionsocial->Sigla}}">
	</div>

	<div class="mb-3">
		<label for="" class="form-label">Direccion:</label>
		<input id="Direccion" name="Direccion" type="text" class="form-control" value="{{$organizacionsocial->Direccion}}">
	</div>
	
	<a href="{{ route('organizacionsocial.index') }}" class="btn btn-secondary">Cancelar</a>
	<button type="submit" class="btn btn-primary">Guardar</button>
</form>

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
            $('#organizacionsocials').DataTable({
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