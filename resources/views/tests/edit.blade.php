@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		{{-- col-md-offset-2 agrega dos colunnas al principio --}}
		<div class="col-md-8 col-md-offset-2"> 
			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Registro
				</div>

				<div class="panel-body">
					{!! Form::model($test, ['route' => ['tests.update', $test->id], 'method' => 'PUT']) !!}

						@include('tests.partials.form')
						
					{!! Form::close() !!}
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection