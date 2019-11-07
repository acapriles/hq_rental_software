<div class="form-group">
	{{ Form::label('text_field', 'Text field') }}
	{{ Form::text('text_field', null, ['class' => 'form-control', 'id' => 'text_field']) }}
</div>

<div class="form-group">
	{{ Form::label('area_field', 'Area field') }}
	{{ Form::textarea('area_field', null, ['class' => 'form-control', 'id' => 'area_field']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>