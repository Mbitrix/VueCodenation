@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>Courses</h4></div>
		
	</div>
</div>
<div class="container">
		<div class="row">
		<div class="col-sm-8">
			<div class="card">
	 			 <div class="card-header">Course Overview</div>
	  		 @foreach($courses->chunk(2) as $chunk)
				<div class="row">
				 @foreach($chunk as $course)
					<div class="col-sm-5">
						<div class="card-body">
	    			<div class="card" style="width: 18rem;">
	    				
	  			<div class="card-body">
	  				<div class="">
	  					<p>{{$course->description}}</p>
	  				</div>
	    			<a href="/course/{{$course->id}}" class="card-link"><h5 class="card-title">{{$course->name}}</h5>	</a>
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