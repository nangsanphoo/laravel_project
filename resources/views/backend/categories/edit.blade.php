@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1>
            	</div>
            </div>
          </div>
          <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
          	@csrf
		    @method('PUT')
		  <div class="form-group row">
		    <label class="col-sm-2">Name</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="name" value="{{$category->name}}">
		      @error('name')
		      <div class="text-danger">You need to fill your name here!</div>
		      @enderror
		    </div>
		  </div>
		  <div class="form-group row">
		    <label  class="col-sm-2 col-form-label">Photo</label>
		    <div class="col-sm-5">
		    	<input type="file" class="form-control-file" name="photo">
		    	<img src="{{asset($category->photo)}}" class="img-fluid w-25">
		    	<input type="hidden" name="oldphoto" class="form-control-file" value="{{$category->photo}}">
		    </div>
		    
		  </div>
		 
		  <div class="form-group row">
		    <div class="col-sm-2">
		      <input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
		    </div>
		  </div>
		</form>
      </div>

      
      		

@endsection