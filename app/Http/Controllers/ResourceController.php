<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Page;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Resource::class);
        $resources= Resource::all();
        $pages = Page::all();
        return view('resource.index', compact('resources','pages'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Resource::class);
        $resources= Resource::all();
        $pages = Page::all();
        return view('resource.create', compact('resources','pages'));

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
        $this->authorize('create', Resource::class);
        $input=$request->all();
        $resource= Resource::create($input);
        return redirect('/resource/'.$resource->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
        $this->authorize('view', $resource);
        $pages= Page::all();
        return view('resource.show', compact('resource','pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
        $this->authorize('update', $resource);
        $pages = Page::all();
        return view('resource.edit', compact('resources','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        //
        $this->authorize('update', $resource);
        $input=$request->all();
        $resource->update($input);
          return redirect('/resource/'.$resource->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
        $this->authorize('delete', $resource);
         $resource->delete();
        return redirect('/resource');
    }
}
