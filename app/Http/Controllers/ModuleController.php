<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\Course;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         // $this->authorize('viewAny', Module::class);
         $modules= Module::all();
         $courses= Course::all();
         return view('module.index', compact('modules','courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $this->authorize('create', Module::class);
         $courses= Course::all();
         return view ('module.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $this->authorize('create', Module::class);
         $this->validate(request(), [
        'title'=>'required',
        'course_id'=>'required',
        'description'=>'required',
        ]);
         $input=$request->all();
         $module=Module::create($input);
         return redirect('/module/'.$module->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
          // $this->authorize('view', $module);
          $course= Course::all();
          return view('module.show',compact('course','module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
         // $this->authorize('update', $module);
         $courses= Course::all();
         return view('module.edit',compact('module','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        // $this->authorize('update', $module);
        $input = $request->all();
        $module->update($input);
        return redirect('/module/'.$module->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
         // $this->authorize('delete', $module);
        $module->delete();
        return redirect('/module');
    }
}
