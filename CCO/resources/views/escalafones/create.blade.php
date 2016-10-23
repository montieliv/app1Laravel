@extends('main.index')

@section('title','Crear Escalafon')

@section('content') <br><br><br><br>

		<div style="width:50%">
           {!! Form::open(['route' => 'admin.escalafones.store', 'method' => 'POST']) !!}
				<div class="form-group" >
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('nivel','Nivel') !!}
					<input type="number" id="nivel" name="nivel" min=1 max=20 class="form-control" placeholder="No.de Escalafon" required style="width:25%">
				</div>
				
				<div class="form-group">
					{!! Form::submit('Agregar', ['class' =>'btn btn-primary']) !!}
				</div>

		</div>
			    
			{!! Form::close() !!}
@endsection			
