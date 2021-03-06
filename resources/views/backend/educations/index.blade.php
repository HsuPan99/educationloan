@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Education List(Table)</h2>
	<a href="{{route('educations.create')}}" class="btn btn-success float-right">Add Education</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Roll No</th>
				<th>Year</th>
				<th>University</th>
				<th>Semester</th>
				
				
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($educations as $education)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$education->rollno}}
					{{-- <a href="{{route('educations.show',$item->id)}}">
					<span class="badge badge-primary badge-pill">Detail</span></a>
					<a href="#" class="box" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
					<span class="badge badge-primary badge-pill">Modal</span></a> --}}
				</td>
				
				<td>{{$education->university}}</td>
				<td>{{$education->year}}</td>
				<td>{{$education->semester}}</td>
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
{{-- @section('script')
<script type="text/javascript">
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
</script>

@endsection --}}