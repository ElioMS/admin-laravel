@extends('adminems::panel')

@section('content')
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Categories </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Path </th>
						{{-- <th> Created at </th>
						<th> Image </th> --}}
					</thead>

					<tbody>
						@foreach ($routes as $element)
							<tr data-id="{{ $element->id }}">
								<td> {{ $element->path }} </td>	
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>
@stop