@extends('layouts.page')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>My Course</h4></div>
	</div>
</div>

{{-- 'id','module_id','title','description' --}}
<div class="container">
    <div class="row">
    <div class="col-sm-6">
    <table class="table table-condensed table-striped table-bordered">
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{$module->title}}</td>
            </tr>
            <tr>
                <th>Course</th>
                <td>{{$module->course->name}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$module->description}}</td>
            </tr>
        </tbody>
    </table>
    <form action="/module/{{$module->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div class="btn btn-group">
    <a href="/module/{{$module->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete </button>
    <a href="/module" class="btn btn-sm btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
    </div>
    </form>
    </div>
    </div>
    </div>
@endsection
