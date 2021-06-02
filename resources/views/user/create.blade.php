@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		{{-- 'name','description','image' --}}
		<div class="col-sm-10"><h4><i class="fa fa-plus" aria-hidden="true"></i>User</h4></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<form action="/course" method="POST">
				@csrf
				<div class="form-group">
				   <x-forms.input name="name" value="" type="text" label="Course name"/>	
				</div>
				<div class="form-group">
				   <x-forms.input name="image" value="Upload image"  type="file" label="Image" />	
				</div>
				<div class="form-group">
					<x-forms.text-area name="description" value="" rows="10" label='Course Description'/>
				</div>
				<div class="form-group" style="margin-top:10px;">
					<x-forms.button class="btn btn-sm btn-success" text='Save Course'/>
				</div>
				
			</form>
			
		</div>
	</div>
</div>
	
@endsection

             
	<div class="form-group">
</div>
 