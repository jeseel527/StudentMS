@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Age</label>
				<div class="col-sm-10">
					<input type="text" name="age" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Status</label>
				<div class="col-sm-10">
					<select name="status" class="form-control">
						<option value="Active">Active</option>
						<option value="InActive">InActive</option>
					</select>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')