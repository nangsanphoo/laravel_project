@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
            	</div>
            </div>
          </div>
          <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
          	@csrf
		  
		  <div class="form-group row">
		    <label class="col-sm-2">Name</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="name">
		      @error('name')
		      <div class="text-danger">{{$message}}</div>
		      @enderror
		    </div>
		  </div>
		  <div class="form-group row">
		    <label  class="col-sm-2 col-form-label">Photo</label>
		    <div class="col-sm-5">
		    	<input type="file" class="form-control-file" name="photo">
		    	@error('photo')
			      <div class="text-danger">{{$message}}</div>
			    @enderror
		    </div>
		    
		  </div>
		 
		  <div class="form-group row">
		    <div class="col-sm-2">
		      <input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
		    </div>
		  </div>
		</form>
      </div>

      
      		

@endsection