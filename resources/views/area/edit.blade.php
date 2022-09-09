@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

@section('content')
	
	<h2>EDITAR UN AREA</h2>

<form action="/area/{{$area->id }}" method="POST">

	@csrf
	@method('PUT')

<div class="mb-3">
        <label for="" class="form-label">Cargo:</label>
            <label for=""  class="form-label">{{$area->cargos->Nombre}}</label>
        <input style="display: none" type="text"  name="id_cargo" value="{{$area->cargos->id}}" size="50">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Representante:</label>
            <label for=""  class="form-label">{{$area->representantes->Nombre}}</label>
        <input type="text" style="display: none" name="id_representante" value="{{$area->representantes->id}}"  size="50">
    </div>

	<div class="mb-3">
		<label for="" class="form-label">Nombre:</label>
		<input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$area->Nombre}}">
	</div>
	
	<div class="mb-3">
		<label for="" class="form-label">Sigla:</label>
		<input id="Sigla" name="Sigla" type="text" class="form-control" value="{{$area->Sigla}}">
	</div>

	<div class="mb-3">
		<label for="" class="form-label">Ubicacion:</label>
		<input id="Ubicacion" name="Ubicacion" type="text" class="form-control" value="{{$area->Ubicacion}}">
	</div>
	
    <div class="mb-3">
        <label for="" class="form-label">Piso:</label>
        <input id="Piso" name="Piso" type="text" class="form-control" value="{{$area->Piso}}">
    </div>
	<a href="{{ route('area.index') }}" class="btn btn-secondary">Cancelar</a>
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