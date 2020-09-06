@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <h1 class="h3 mb-0 text-gray-800">Subcategories List</h1>
            <a href="{{route('subcategories.create')}}" class="btn btn-info">Add New</a>
            	
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<table class="table table-bordered">
	          		<thead class="bg-dark text-white">
	          			<tr>
	          				<th>No</th>	          				
	          				<th>Name</th>
	          				<th>Category Name</th>
	          				<th>Action</th>

	          			</tr>
	          		</thead>
	          		<tbody>
	          			@php $i=1; @endphp
	          			@foreach($subcategories as $subcategory)
	          			<tr>
	          				<td>{{$i++}}</td>
	          				<td>{{$subcategory->name}} </td>
	          				<td>{{$subcategory->category->name}}</td>
	          
	          				<td>
	          					
	          					<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
	          					<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}">
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