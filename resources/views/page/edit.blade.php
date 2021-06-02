@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		
		<div class="col-sm-10"><h4><i class="fa fa-plus" aria-hidden="true"></i> Module</h4></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<form action="/module" method="POST">
				@csrf
				<div class="form-group">
				   <x-forms.input name="title" value="{{$module->title}}"  type="text" label="Title" />	
				</div>
				<div class="form-group">
				  <?php $options=LazyForm::getArrayFromCollection($courses,2,'id','name') ?>
             	<x-forms.select name="course_id" value="{{$module->course->name}}" :options=$options label='Select Course' />
				</div>
				
				<div class="form-group">
					<x-forms.text-area name="description" value="{{$module->description}}" rows="10" label='Module Description'/>
				</div>
				<div class="form-group" style="margin-top:10px;">
					<x-forms.button class="btn btn-sm btn-success" text='Save Module'/>
				</div>
				
			</form>
			
		</div>
	</div>
</div>
	
@endsection

             
	<div class="form-group">
</div>
 