@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Student Create(Form)</h2>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
				@csrf
			
				{{-- <div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div> --}}
				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo" class="form-control-file">
				</div>
				<div class="form-group">
					<label>Father Name</label>
					<input type="text" name="fathername" class="form-control-file">
				</div>
				<div class="form-group">
					<label>NRC No</label>
					<input type="text" name="nrcno" class="form-control-file">
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="text" name="state" class="form-control-file">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" name="city" class="form-control-file">
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phoneno" class="form-control-file">
				</div>
					
					<input type="submit" value="Create" class="btn btn-outline-primary">

			</form>
		</div>
	</div>





</div>
@endsection
