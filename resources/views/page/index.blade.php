
{{-- 'id','module_id','title','notes','order' --}}
@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>Page</h4></div>
		 <div class="col-sm-2"><a href="/page/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus"></i> Create Page</a>
     </div>
		
	</div>
</div>

<div class="container"> 
	<div class="row">
		@foreach($pages as $page)
		<p>
  	<div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{{$page->module->title}}</div>
      </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <h5 class="card-title">{{$page->title}}</h5>
    		<p class="card-text">{{$page->notes}}</p>
  </div>
</div>
@endforeach
</div>
	</div>



{{-- <div class="container">
		<div class="row">
		<div class="col-sm-8">
			@foreach($pages as $page)
			<div class="card">
	 			 <div class="card-header">{{$page->module->title}}</div>
		    </div>
		    <div class="card-body">
    		<h5 class="card-title">{{$page->title}}</h5>
    		<p class="card-text">{{$page->notes}}</p>
  			</div>
		    @endforeach
	</div>
	</div>
</div> --}}

	
@endsection