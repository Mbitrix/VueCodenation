<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Quiz;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Exam::class);
        $exams = Exam::all();
        $quizzes = Question::all();
        return view('exam.index', compact('exams','quizzes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Exam::class);
        $quizzes = Question::all();
        return view('exam.create', compact('exams','quizzes'));

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
        $this->authorize('create', Exam::class);
        $input=$request->all();
        $exam = Exam::create($input);
        return redirect('/exam/'.$exam->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
        $this->authorize('view', $exam);
        return view('exam.show' compact('exam'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
        $this->authorize('update', $exam);
        $quizzes = Question::all();
        return view('exam.edit', compact('exams','quizzes'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
        $this->authorize('update', $exam);
        $input = $request->all();
        $exam->update($input);
        return redirect('/exam/'.$exam->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
        $this->authorize('delete', $exam);
        $exam->delete();
          return redirect('/exam');

    }
}
