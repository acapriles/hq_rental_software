@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Registro
				</div>

				<div class="panel-body">
					<p><strong> </strong>{{ $test->name }}</p>
					<p><strong>Text field: </strong>{{ $test->text_field }}</p>
					<p><strong>Area field: </strong>{{ $test->area_field }}</p>
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection