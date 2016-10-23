@extends('main.index')
@section('title', 'Escalafones')

@section('content') <br><br>

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>


@endif
	<h2>Listado de Escalafones Capturados </h2>
<!-- <a class="btn btn-primary" href="{{ route('admin.escalafones.create') }}" role="button"><i class="fa fa-plus-square" aria-hidden="true"></i></a> -->
	<div class="table-responsive">
	<table class="table table-condensed table-hover table-rounded table-bordered">
		<thead>
			<th class="text-center btn-success">No.</th>
			<th class="text-center btn-success">Nombre</th>
			<th class="text-center btn-success">Acción</th>
		</thead>
		<tbody>
		
		@foreach ($escalafones as $escalafon)
			<tr>			
				<td class="text-center">{{ $escalafon->nivel }}</td>
				<td class="text-center">{{ $escalafon->name }}</td>
				<td class="text-center"><a class="btn btn-primary" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										<a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
		@endforeach					
		</tbody>
	</table>
	</div>
			
@endsection