<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Question::class);
        $questions= Question::all();
        $quizzes= Quiz::all();
        return view('question.index', compact('questions','quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Question::class);
        $quizzes= Quiz::all();
        return view('question.create' compact('quizzes'));

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
        $this->authorize('create', Question::class);
        $input=$request->all();
        $question= Question::create($input);
        return redirect('/question/'.$question->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
        $this->authorize('view', $question);
        $quizzes= Quiz::all();
        return view('question.show' compact('question','quizzes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
         $this->authorize('update', $question);
         $quizzes= Quiz::all();
         return view('question.edit',compact('question','quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
        $this->authorize('update', $question);
        $input = $request->all();
        $question->update($input);
        return redirect('/question/'.$question->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
         $this->authorize('delete', $question);
         $question->delete();
         return redirect('/question');
    }
}
