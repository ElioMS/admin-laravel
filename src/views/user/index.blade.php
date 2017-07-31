@extends('adminems::panel')

@section('content')

	<a href="{{ route('users.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nuevo </a>
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Usuarios </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Usuario </th>
						<th> Rol </th>
					</thead>

					<tbody>
						@foreach ($users as $element)
							<tr data-id="{{ $element->id }}">
								<td> <a href="{{ route('users.edit' , ['slug' => $element->id]) }}"> {{ $element->name }} </a> </td>
								<td> <strong> {{ $element->role->name }} </strong></td>
								{{-- <td> {{ $element->created_at }} </td> --}}
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
