<div class="panel panel-white">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> SEO </h3>
	</div>
	<div class="panel-body form-horizontal">
		
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'title' , $errors, '') !!}
		</div>

		<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{!! Form::stdTextArea('Descripción', 0 , 'description' , $errors) !!}
		</div>
	
	</div>
	
</div>

