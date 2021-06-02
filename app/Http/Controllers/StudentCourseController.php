<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;



class StudentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', StudentCourse::class);
        $studentCourses= StudentCourse::all();
        $students= Student::all();
        $courses= Course::all();
        return view('studentCourse.index', compact('studentCourses','students','courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', StudentCourse::class);
        $students= Student::all();
        $courses= Course::all();
         return view('studentCourse.create', compact('students','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', StudentCourse::class);
        $input=$request->all();
        $StudentCourse = Course::create($input);
        return redirect('/studentCourse'.$studentCourse->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCourse $studentCourse)
    {
        $this->authorize('view', $studentCourse);
        $student = Student::all();
        $courses = Course::all();
        return view('studentCourse.show', compact('student','course','studentCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCourse $studentCourse)
    {
        $this->authorize('update', $studentCourse);
        $students= Student::all();
        $courses= Course::all();
         return view('studentCourse.edit', compact('students','courses','studentCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentCourse $studentCourse)
    {
        $this->authorize('update', $studentCourse);
        $input = $request->all();
        $studentCourse->update($input);
        return redirect('/studentCourse/'.$studentCourse->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCourse $studentCourse)
    {
        $this->authorize('delete', $studentCourse);
        $studentCourse->delete();
        return redirect('/studentCourse');

    }
}
