@extends('layouts.page')
@section('content')
	<div class="page-header">
	  <div class="row">
       <div class="col-sm-10"><h4>Students</h4></div>
 		
  	 </div>
    </div>
<div class="container">
    <div class="row">
	    <div class="col-sm-12 over-flow">
			<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Name</th>
				<th>Registration number</th>
				<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($students as $student)
			  	<tr><td>{{ ++$i }}</td>
					<td>{{$student->user->name}}</td>
					<td>{{$student->reg_no}}</td>
					<td><a href="/student/{{$student->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach
							
					</tbody>
			</table>
		<div class="over-flow mt-5">
			{{$students->links()}}
		</div>
	</div>
</div>
</div>
@endsection
