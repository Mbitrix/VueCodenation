<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Module;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('viewAny', Page::class);
        $pages = Page::all();
        $modules = Module::all();
        return view('page.index', compact('pages','modules'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('create', Page::class);
      
        $modules = Module::all();
        return view('page.create', compact('modules'));
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
        // $this->authorize('create', Page::class);
      $this->validate(request(), [
        'module_id'=>'required',
        'title'=>'required',
        'notes'=>'required',
        'order'=>'required',
  
        ]);
        $input= $request->all();
        $page = Page::create($input);
          return redirect('/page/'.$page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
        $this->authorize('view', $page);
        $modules = Module::all();
        return view('page.show' ,compact('page','modules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
        $this->authorize('update', $page);
        $modules = Module::all();
        return view('page.edit', compact('page','modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
        $this->authorize('update', $page);
        $input = $request->all();
        $page->update($input);
        return redirect('/page/'.$page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
        $this->authorize('delete', $page);
        $page->delete();
        return redirect('/page');
    }
}
