@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Student List(Table)</h2>
	<a href="{{route('students.create')}}" class="btn btn-success float-right">Add Student</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Father Name</th>
				<th>NRC No</th>
				<th>State</th>
				<th>City</th>
				<th>Phone No</th>
				
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($students as $student)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$student->name}}
					{{-- <a href="{{route('items.show',$item->id)}}">
					<span class="badge badge-primary badge-pill">Detail</span></a>
					<a href="#" class="box" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
					<span class="badge badge-primary badge-pill">Modal</span></a> --}}
				</td>
				<td><img src="{{asset($student->photo)}}" width="70" height="70"></td>
				<td>{{$student->fathername}}</td>
				<td>{{$student->nrcno}}</td>
				{{-- <td>
					<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
					<form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td> --}}
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{--Detail Modal--}}
{{-- <div class="modal fade" id="mymodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
						Name:<p id="name"></p>
					
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" class="img-fluid w-50 d-block " id="photo" >
					</div>
					<div class="col-md-6">
						Price:<strong id="price"></strong>
						<br>
						Description:<srong id="desc"></strong>

					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
 --}}
 @endsection
@section('script')
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('.box').click(function(){
			// alert('Box!');
		
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var desc= $(this).data('desc');
		$('.modal-title').html(name);
		$('#photo').attr('src',photo);
		$('#price').html(price);
		$('#desc').html(desc);
		$('#mymodal').modal('show');

		})
	})
</script> --}}

@endsection