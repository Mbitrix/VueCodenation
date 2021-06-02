@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4><i class="fa fa-plus" aria-hidden="true"></i> Student</h4></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<form action="/student" method="POST">
				@csrf
				<div class="form-group">
				  <?php $options=LazyForm::getArrayFromCollection($user,2,'id','name') ?>
             	<x-forms.select name="user_id" :options=$options label='Select Student' />
				</div>
				<div class="form-group">
				   <x-forms.input name="reg_no" value="" type="text" label="Registration number"/>	
				</div>

				<div class="form-group" style="margin-top:10px;">
					<x-forms.button class="btn btn-sm btn-success" text='Save Student'/>
				</div>
				
			</form>
			
		</div>
	</div>
</div>
	
@endsection
