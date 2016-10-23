@extends('main.index')
@section('title', 'Movimientos SAP')

@section('content')
	<h2>Los movimientos son=</h2>
	
	<table class="table table-condensed table-hover table-rounded table-bordered">
		<thead>
			<th>Ficha</th>
			<th>Concepto</th>
			<th>Acción</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</thead>
		<tbody>
		@foreach ($movSaps as $movS)
			<tr>
				<td>{{ $movS->idTSap }}</td>
				<td>{{ $movS->nombreT }}</td>
				<td>{{ $movS->tipo }}</td>
				<td>{{ $movS->fecha }}</td>
				<td><button value="{{ $movS->id }}" onclick="msjBoton(this);">Aceptar</button></td>
			</tr>
		</tbody>
		@endforeach		
	</table>
@endsection