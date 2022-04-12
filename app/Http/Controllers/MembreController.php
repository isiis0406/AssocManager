<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Http\Requests\MembreRequest;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $membres = Membre::with('association')->get();
        return view('membre.index', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('membre.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembreRequest $request)
    {
       
        Membre::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' =>$request->input('adresse'),
            'dateNaissance' =>$request->input('dateNaissance'),
            'telephone' =>$request->input('telephone'),
            'profession' =>$request->input('profession'),
            'email' =>$request->input('email'),
          
        ]
        );

        return Redirect(route('membre.index'))->with('succes','Membre Ajouté.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }
}
