@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>My Course</h4></div>
	</div>
</div>


<div class="container">
    <div class="row">
    <div class="col-sm-6">
    <table class="table table-condensed table-striped table-bordered">
        <tbody>
            <tr>
                <th>Student name</th>
                <td>{{$student->user->name}}</td>
            </tr>
            <tr>
              <th>Registration number</th>
                <td>{{$student->reg_no}}</td>
            </tr>

        </tbody>
    </table>
    <form action="/student/{{$student->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div class="btn btn-group">
    <a href="/student/{{$student->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete </button>
    <a href="/student" class="btn btn-sm btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
    </div>
    </form>
    </div>
   {{--  <div class="col-sm-6">
   <img src="{{ $student->getMedia('students')->first()->getUrl() }}" alt="image" width="100%"; />
    </div> --}}
    </div>
    </div>
@endsection
