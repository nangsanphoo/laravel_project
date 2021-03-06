@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <h1 class="h3 mb-0 text-gray-800">Items List</h1>
            <a href="{{route('items.create')}}" class="btn btn-info">Add New</a>
            	
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<table class="table table-bordered">
	          		<thead class="bg-dark text-white">
	          			<tr>
	          				<th>No</th>
	          				<th>Code No</th>
	          				<th>Name</th>
	          				<th>Price</th>
	          				<th>Actions</th>

	          			</tr>
	          		</thead>
	          		<tbody>
	          			@php $i=1; @endphp
	          			@foreach($items as $item)
	          			<tr>
	          				<td>{{$i++}}</td>
	          				<td>{{$item->codeno}}</td>
	          				<td>{{$item->name}} </td>
	          				<td>{{$item->price}} MMK</td>
	          				<td>
	          					<a href="{{route('items.show',$item->id)}}" class="btn btn-primary">Detail</a>
	          					<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
	          					
	          					<form method="post" action="{{route('items.destroy',$item->id)}}">
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