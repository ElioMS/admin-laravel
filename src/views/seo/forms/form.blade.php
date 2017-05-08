<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"> Edit - SEO </h3>
	</div>
	<div class="panel-body form-horizontal">
		
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			{!! Form::stdInput('Título *', 'title', $errors, 'Mensaje de ayuda') !!}
		</div>

		<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{!! Form::stdTextArea('Descripción', 'description' , $errors) !!}	
		</div>

		<div class="form-group">
			<div class="col-sm-8">
				
			</div>
		</div>
		
	</div>
	
</div>

