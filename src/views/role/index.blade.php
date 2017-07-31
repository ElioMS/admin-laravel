@extends('adminems::panel')

@section('content')

	<a href="{{ route('roles.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Agregar </a>
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Roles </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Rol </th>
						
					</thead>

					<tbody>
						@foreach ($roles as $element)
							<tr data-id="{{ $element->id }}">
								<td> <a href="{{ route('roles.edit' , ['slug' => $element->slug]) }}"> {{ $element->name }} </a> </td>
								{{-- <td> {{ $element->created_at }} </td> --}}
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
