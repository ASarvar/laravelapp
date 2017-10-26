@extends('layouts.admin')



@section('content')

	<h1> Category</h1>

	<div class="col-sm-6">

		{!! Form::open(['method'=>'Post', 'action'=>'AdminCategoriesController@store']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name')!!}
			{!! Form::text('name', null, ['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Create Category', ['class'=>'btn btn-primary col-sm-4']) !!}
		</div>

	{!! Form::close() !!}

	</div>

	<div class="col-sm-6">
	
	@if($categories)
	
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Created date</th>
					
				</tr>
			</thead>
			<tbody>

			@foreach($categories as $category)

				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->created_at ? $category->created_at->diffForhumans() : 'no date'}}</td>
				</tr>

			@endforeach
			
			</tbody>

		</table>
	
	@endif

	</div>

@stop