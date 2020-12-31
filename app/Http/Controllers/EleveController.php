<?php

namespace App\Http\Controllers;

use App\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
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
            $eleves = Eleve::where('Nom', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $eleves = Eleve::all();
        }

        if ($search) {
            $eleves = Eleve::where('Prenom', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $eleves = Eleve::all();
        }

        if ($search) {
            $eleves = Eleve::where('Email', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $eleves = Eleve::all();
        }

        return view('eleves.index', ['eleves'=>$eleves]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eleves.create');
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
        $Prenom = $request->input('Prenom');
        $Email = $request->input('Email');
        
        $eleve = new Eleve;
        $eleve -> Nom = $Nom;
        $eleve -> Prenom = $Prenom;
        $eleve -> Email = $Email;
        $eleve -> save();

        return redirect() -> route('eleves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        return view('eleves.show', ['eleve'=>$eleve]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', ['eleve'=>$eleve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        $eleve = Eleve::find($eleve -> id);
        $eleve -> Nom = $request -> input('Nom');
        $eleve -> Description = $request -> input('Description');
        $eleve -> save();
        
        return redirect() -> route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(eleve $eleve)
    {
        $eleve = Eleve::find($eleve -> id);
        $eleve-> delete();
    
        return redirect()->route('eleves.index');
    }
}
