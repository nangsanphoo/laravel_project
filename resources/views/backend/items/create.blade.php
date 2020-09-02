@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
            	</div>
            </div>
          </div>
          <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
          	@csrf
		  <div class="form-group row">
		    <label class="col-sm-2">Code No</label>
		    <div class="col-sm-5"> 
		      <input type="text" class="form-control " name="codeno">
		      @error('codeno')
		      <div class="text-danger">{{$message}}</div>
		      @enderror
		    </div>
		  </div>
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
		    <label class="col-sm-2">Price</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="price">
		      @error('price')
		      <div class="text-danger">{{$message}}</div>
		      @enderror
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Discount</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="discount" value="0">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Description</label>
		    <div class="col-sm-5">
		      <textarea name="description" class="form-control"></textarea>
		      @error('description')
		      <div class="text-danger">{{$message}}</div>
		      @enderror
		    </div>
		  </div>
		  <div class="form-group row">
		  	<label class="col-md-2">Brand</label>
		    <div class="col-md-5">
		    	<select class="form-control form-control-md" name="brand">
		    	<optgroup label="Choose Brand">
		    		@foreach($brands as $brand)
		    		<option value="{{$brand->id}}">{{$brand->name}}</option>
		    		@endforeach
		    	</optgroup>
		    </select>
		    </div>
		  </div>
		  <div class="form-group row">
		  	<label class="col-md-2">Subcategory</label>
		  	<div class="col-md-5">
		  		<select class="form-control form-control-md" name="subcategory">
		    	<optgroup label="Choose Subcategory">
		    		@foreach($subcategories as $subcategory)
		    		<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
		    		@endforeach
		    	</optgroup>
		    </select>
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