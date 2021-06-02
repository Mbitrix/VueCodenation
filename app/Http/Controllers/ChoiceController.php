<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Choice::class);
        $choice = Choice::all();
        $question = Question::all();
        return view('choice.index', compact('choice','question'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Choice::class);
        $question = Question::all();
        return view('choice.create', compact('question'));


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
        $this->authorize('create', Choice::class);
        $input=$request->all();
        $choice=  Choice::create($input);
        return redirect('/choice/'.$choice->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function show(Choice $choice)
    {
        //
        $this->authorize('view', $choice);
        return view('choice.show' compact('choice'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function edit(Choice $choice)
    {
        //
        $this->authorize('update', $choice);
        $question = Question::all();
        return view('choice.edit', compact('choice','question'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choice $choice)
    {
        //
        $this->authorize('update', $choice);
        $input = $request->all();
        $choice->update($input);
        return redirect('/choice/'.$choice->id)


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choice $choice)
    {
        //
        $this->authorize('delete', $choice);
        $choice->delete();
        return redirect('/choice');


    }
}
