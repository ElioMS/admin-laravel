@extends('adminems::panel')

@section('content')
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Seo </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Path </th>
						<th> Título </th>
						<th> Descripción </th>
					</thead>

					<tbody>
						@foreach ($routes as $element)
							<tr data-id="{{ $element->id }}">
								<td> <a href="{{ route('seo.edit' , ['id' => $element->id]) }}"> {{ $element->path }} </a> </td>	
								<td> {{ $element->title }} </td>
								<td> {{ $element->description }} </td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>
@stop

@section('scripts')
	@include('adminems::success')
@stop