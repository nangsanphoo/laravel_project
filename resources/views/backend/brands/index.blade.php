@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <h1 class="h3 mb-0 text-gray-800">Brands List</h1>
            <a href="{{route('brands.create')}}" class="btn btn-info">Add New</a>
            	
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<table class="table table-bordered">
	          		<thead class="bg-dark text-white">
	          			<tr>
	          				<th>No</th>
	          				<th>Name</th>
	          				<th>Photo</th>
	          				<th>Actions</th>

	          			</tr>
	          		</thead>
	          		<tbody>
	          			@php $i=1; @endphp
	          			@foreach($brands as $brand)
	          			<tr>
	          				<td>{{$i++}}</td>
	          				<td>{{$brand->name}} </td>
	          				<td><img src="{{$brand->photo}}" class="img-fluid w-25"></td>
	          				<td>
	          					
	          					<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
	          					<form action="{{route('brands.destroy',$brand->id)}}" method="post">
	          						@csrf
	          						@method('DELETE')
	          						<button class="btn btn-danger">Delete</button>
	          					</form>

	          				</td>

	          			</tr>
	          			@endforeach
	          		</tbody>
          		</table>
        	</div>
          	
        </div>
     </div>
@endsection