@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">

		<div class="col-sm-10"><h4><i class="fa fa-plus" aria-hidden="true"></i> Courses</h4></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<form action="/course" method="POST">
				@csrf
				<div class="form-group">
				   <x-forms.input name="name" value="{{$course->name}}" type="text" label="Course name"/>	
				</div>
				<div class="form-group">
				   <x-forms.input name="image" value="{{$course->image}}"  type="file" label="Image" />	
				</div>
				<div class="form-group">
					<x-forms.text-area name="description" value="{{$course->description}}" rows="10" label='Course Description'/>
				</div>
				<div class="form-group">
					<x-forms.button class="btn btn-sm btn-success" text='Update'/>
				</div>
				
			</form>
			
		</div>
	</div>
</div>
	
@endsection

             
	<div class="form-group">
</div>
 