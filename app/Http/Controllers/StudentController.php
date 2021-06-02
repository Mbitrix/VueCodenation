<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('viewAny', User::class);
        $users= User::all();
        $students= Student::orderBy('created_at','desc')->paginate(20);
        return view('student.index', compact('students','users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('create', Student::class);
        $user= User::all();
        return view('student.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $this->authorize('create', Student::class);
        $this->validate(request(), [
        'reg_no'=>'required',
        'user_id'=>'required',
        ]);
        $input = $request->all();
        $student = Student::create($input);
        return redirect('/student/'.$student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        // $this->authorize('view', $student);
        $user = User::all();
        return view('student.show',compact('student','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        // $this->authorize('update', $student);
        $users= User::all();
        return view('student.edit',compact('student','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        // $this->authorize('update', $student);
        $input = $request->all();
        $student->update($input);
        return redirect('/student/'.$student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // $this->authorize('delete', $student);
        $student->delete();
        return redirect('/student');
    }
}
