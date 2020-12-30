<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        if ($search) {
            $modules = Module::where('Nom', 'like', '%'.$search.'%') 
            -> get();
        } else {
            $modules = Module::all();
        }

        return view('modules.index', ['modules'=>$modules]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nom = $request->input('Nom');
        $Description = $request->input('Description');
        
        $module = new Module;
        $module -> Nom = $Nom;
        $module -> Description = $Description;
        $module -> save();

        return redirect() -> route('modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('modules.show', ['module'=>$module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('modules.edit', ['module'=>$module]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $module = Module::find($module -> id);
        $module -> Nom = $request -> input('Nom');
        $module -> Description = $request -> input('Description');
        $module -> save();
        
        return redirect() -> route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(module $module)
    {
        $module = Module::find($module -> id);
        $module-> delete();
    
        return redirect()->route('modules.index');
    }
}
