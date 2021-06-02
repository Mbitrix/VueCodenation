@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		
		<div class="col-sm-10"><h4><i class="fa fa-plus" aria-hidden="true"></i> Page</h4></div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<form action="/page" method="POST">
				@csrf
				<div class="form-group">
				   <x-forms.input name="title" value=""  type="text" label="Title" />	
				</div>
				<div class="form-group">
				   <x-forms.input name="order" value="1"  type="text" label="Order" />	
				</div>
				<div class="form-group" style="margin-top:10px;">
				  <?php $options=LazyForm::getArrayFromCollection($modules,2,'id','title') ?>
             	<x-forms.select name="module_id" :options=$options label='Select module' />
				</div>
				
				<div class="form-group"style="margin-top:10px;" >
					<x-forms.text-area name="notes" value="" rows="10" label='Notes'/>
				</div>
				<div class="form-group" style="margin-top:10px;">
					<x-forms.button class="btn btn-sm btn-success" text='Save page'/>
				</div>
				
			</form>
			
		</div>
	</div>
</div>
	
@endsection

             
	<div class="form-group">
</div>
 