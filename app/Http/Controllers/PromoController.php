<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
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
            $promos = Promo::where('Nom', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $promos = Promo::all();
        }

        if ($search) {
            $promos = Promo::where('Spécialité', 'like', '%'.$search.'%') 
            -> get();
        } 
        else {
            $promos = Promo::all();
        }

        return view('promos.index', ['promos'=>$promos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promos.create');
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
        $Spécialité = $request->input('Spécialité');
        
        $promo = new Promo;
        $promo -> Nom = $Nom;
        $promo -> Spécialité = $Spécialité;
        $promo -> save();

        return redirect() -> route('promos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        return view('promos.show', ['promo'=>$promo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        return view('promos.edit', ['promo'=>$promo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $promo = Promo::find($promo -> id);
        $promo -> Nom = $request -> input('Nom');
        $promo -> Spécialité = $request -> input('Spécialité');
        $promo -> save();
        
        return redirect() -> route('promos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(promo $promo)
    {
        $promo = Promo::find($promo -> id);
        $promo-> delete();
    
        return redirect()->route('promos.index');
    }
}
