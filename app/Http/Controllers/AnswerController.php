<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Answer::class);
        $answers = Answer::all();
        $exams = Exam::all();
        $questions = Question::all();
        return view ('answer.index', compact('answers','exams','questions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Answer::class);
        $exams = Exam::all();
        $questions = Question::all();
         return view ('answer.create', compact('exams','questions'));

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
        $this->authorize('create', Answer::class);
        $input=$request->all();
        $answer= Answer::create($input);
        return redirect('/answer/'.$answer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
        $this->authorize('view', $answer);
        return view('answer.show' compact('answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
        $this->authorize('update', $answer);
         $exams = Exam::all();
         $questions = Question::all();
         return view ('answer.edit', compact('answer','exams','questions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
        $this->authorize('update', $answer);
        $input = $request->all();
        $answer->update($input);
        return redirect('/answer/'.$answer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
        $this->authorize('delete', $answer);
         $answer->delete();
        return redirect('/answer');
    }
}
