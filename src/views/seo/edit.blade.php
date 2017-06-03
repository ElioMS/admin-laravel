@extends('adminems::panel')

@section('content')
	{!! Form::model($seo, ['route' => ['seo.update', $seo->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
		@include('adminems::seo.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-plus"></i> Create </button>
		<a class="btn btn-danger btn-addon m-b-sm" href="{{ route('seo.index') }}"><i class="fa fa-long-arrow-left"></i> Back</a>
	</div>
@stop