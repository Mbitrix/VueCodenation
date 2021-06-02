@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>My Course</h4></div>
	</div>
</div>

	{{-- 'name','description','image' --}}
<div class="container">
    <div class="row">
    <div class="col-sm-6">
    <table class="table table-condensed table-striped table-bordered">
        <tbody>
            <tr>
                <th>Nane</th>
                <td>{{$course->name}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$course->description}}</td>
            </tr>
        </tbody>
    </table>
    <form action="/course/{{$course->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div class="btn btn-group">
    <a href="/course/{{$course->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete </button>
    <a href="/course" class="btn btn-sm btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
    </div>
    </form>
    </div>
   {{--  <div class="col-sm-6">
   <img src="{{ $course->getMedia('courses')->first()->getUrl() }}" alt="image" width="100%"; />
    </div> --}}
    </div>
    </div>
@endsection
