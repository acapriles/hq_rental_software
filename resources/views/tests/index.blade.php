@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		{{-- col-md-offset-2 agrega dos colunnas al principio --}}
		<div class="col-md-8 col-md-offset-2"> 
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de Registros
					<a href="{{ route('tests.create') }}" class="btn btn-sm btn-primary pull-right">
						Crear
					</a>	
				</div>
				
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Text field</th>
								<th>Area field</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>

						<tbody>
							@foreach($tests as $test)
							<tr>
								<td>{{ $test->id }}</td>
								<td>{{ $test->text_field }}</td>
								<td>{{ $test->area_field }}</td>
								<td width="10px">
									<a href="{{ route('tests.show', $test->id) }}" class="btn btn-sm btn-default">
										Ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('tests.edit', $test->id) }}" class="btn btn-sm btn-default">
										Editar
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['tests.destroy', $test->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-sm btn-danger">
										Eliminar
									</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>
					{{ $tests->render() }}
				</div>
					
			</div>
		</div>
	</div>
</div>
@endsection