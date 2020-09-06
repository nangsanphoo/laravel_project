@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
            	</div>
            </div>
          </div>
          <form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
          	@csrf
          	@method('PUT')
		  <div class="form-group row">
		    <label class="col-sm-2">Code No</label>
		    <div class="col-sm-5"> 
		      <input type="text" class="form-control" name="codeno" value="{{$item->codeno}}" readonly="readonly">
		      
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Name</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="name" value="{{$item->name}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label  class="col-sm-2 col-form-label">Photo</label>
		    <div class="col-sm-5">
		    	<input type="file" class="form-control-file" name="photo">
		    	<img src="{{asset($item->photo)}}" class="img-fluid w-25">
		    	<input type="hidden" name="oldphoto" value="{{$item->photo}}">
		    </div>
		    
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Price</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="price" value="{{$item->price}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Discount</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="discount" value="{{$item->discount}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Description</label>
		    <div class="col-sm-5">
		      <textarea name="description" class="form-control" >{{$item->description}}</textarea>
		    </div>
		  </div>
		  <div class="form-group row">
		  	<label class="col-md-2">Brand</label>
		    <div class="col-md-5">
		    	<select class="form-control form-control-md" name="brand">
		    	<optgroup label="Choose Brand">
		    		@foreach($brands as $brand)
		    		<option value="{{$brand->id}}" <?php if($item->brand_id==$brand->id) echo "selected"; ?>>{{$brand->name}}</option>
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
		    		<option value="{{$subcategory->id}}" <?php if($item->subcategory_id==$subcategory->id) echo "selected";?>>{{$subcategory->name}}</option>
		    		@endforeach
		    	</optgroup>
		    </select>
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