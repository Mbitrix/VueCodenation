@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>Modules</h4></div>	
	</div>
</div>

<div class="container">
		<div class="row">
		<div class="col-sm-8">
			<div class="card">
	 			 <div class="card-header">Module Overview</div>
	  		 @foreach($modules->chunk(4) as $chunk)
				<div class="row">
				 @foreach($chunk as $module)
					<div class="col-sm-5">
						<div class="card-body">
	    			<div class="card" style="width: 18rem;">
	    				<div class="card-header">
   						 {{$module->course->name}}
  						</div>
	  			     <div class="card-body">
	  				<div class="">
	  					<p>{{$module->description}}</p>
	  				</div>
	    			<a href="/module/{{$module->id}}" class="card-link"><h5 class="card-title">{{$module->title}}</h5></a>
	  			</div>
	    			</div>
	    		 </div>  
				</div>
			@endforeach
	  		</div>
			@endforeach
		</div>
	</div>
	</div>
</div>	
@endsection