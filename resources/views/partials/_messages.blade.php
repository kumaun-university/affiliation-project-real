@if(Session::has('success'))
  <div class="alert alert-success fade in" style="opacity: 1">
    	<a href="#" class="close" data-dismiss="alert">&times;</a>
    	<strong>Success!</strong> {{ Session::get('success') }}
  </div>

@endif


@if(count($errors)>0)
  <div class="alert alert-danger fade in " style="opacity: 1">
    	<a href="#" class="close" data-dismiss="alert">&times;</a>
    	<strong>Error!</strong> 
    	<ul>
    		@foreach($errors->all() as $error)
    			<li>{{ $error }}</li>
    		@endforeach    		
    	</ul>
  </div>

@endif