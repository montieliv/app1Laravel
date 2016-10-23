@extends('main.index')
@section('title', 'Padron Sección 26')

@section('content')
	<h2>Padrón Actualizado</h2>
	<div class="table-responsive">
	<table class="table table-condensed table-hover table-rounded table-bordered">
		<thead>
			<th class="text-center warning">ID Trabajador</th>
			<th class="text-center danger">Organismo</th>
			<th class="text-center info">Escalafon</th>
			<th class="text-center success">Posición</th>
		</thead>
		<tbody>

		<?php $hT=0; $mT=0; ?>	
		
		@foreach ($informes as $informe)
			<tr>			
				<td style="width:35%">{{ $Worker = App\Trabajador::find( $informe->idT)->ficha }} = 
					{{ $Worker2 = App\Trabajador::find( $informe->idT)->apat }} 
					{{ $Worker2 = App\Trabajador::find( $informe->idT)->amat }} 
					{{ $Worker2 = App\Trabajador::find( $informe->idT)->name }} 
					<?php  $genero = App\Trabajador::find( $informe->idT)->sex;  ?>
					
					@if ($genero === 'M')
					  <?php   $hT++;  ?>
					@else
					   <?php  $mT++;  ?>
					@endif
				</td>
				<td class="text-center">
					@if ($informe->idO === 1)
					    PEP
					@else
					   CORPORATIVO
					@endif
				<td class="text-center">
					@if ($informe->idE === 1)
					    PLANTA DE LODO
					@elseif ($informe->idE === 2)
					    INFORMATICA
					@else
					    SECRETARIAS
					@endif
				</td>
				<td class="text-center">{{ $informe->posicion }}</td>
			</tr>
		@endforeach		
			<tr>
				<td colspan="4">
					<button>Hombres = {{ $hT }}</button>					
					<button>Mujeres = {{ $mT }}</button>					
					<button>Total   = {{ $hT+$mT }}</button>					
				</td>
			</tr>
		</tbody>
	</table>
	</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4" class="text-center">
					<button class="btn-info">Hombres = {{ $TOTh=DB::table('trabajadores')->where('sex','M')->count('*') }}</button>
					<button class="btn-warning">Mujeres = {{ $TOTm=DB::table('trabajadores')->where('sex','F')->count('*') }}</button>	
					<button class="btn-danger">Total   = {{ $TOTh+$TOTm }}</button>
				</div>
			</div>
	{!! $informes->render() 	!!}
@endsection