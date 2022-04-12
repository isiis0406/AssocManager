<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AssociationMembreRequest;

class AssociationMembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth',['except' => []]);
    } 
    public function index($slug)
    {
        $association = Association::where('slug',$slug)->first();
        return view('association.membre.index', compact('association'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $association = Association::where('slug',$slug)->first();
        return view('association.membre.create', compact('association'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationMembreRequest $request, $slug)
    {
        $association = Association::where('slug',$slug)->first();
        Membre::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'dateNaissance' => $request->input('dateNaissance'),
            'telephone' => $request->input('telephone'),
            'profession' => $request->input('profession'),
            'email' => $request->input('email'),
            'association_id' => $association->id

        ]);

        return Redirect(route('association.membres.index',$association->slug))->with('succes','Membre ajouté.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $id)
    {
        ($membre = Membre::where('id',$id)->first());
        return view('association.membre.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssociationMembreRequest $request, $slug, $id)
    {
        $association = Association::where('slug',$slug)->first();
        Membre::where('id',$id)->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'dateNaissance' => $request->input('dateNaissance'),
            'telephone' => $request->input('telephone'),
            'profession' => $request->input('profession'),
            'email' => $request->input('email'),

        ]);
        return Redirect(route('association.membres.index',$association->slug))->with('succes','Edition sauvegardée.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $association = Association::where('slug',$slug)->first();

        if(Auth::user()->id == $association->user_id){
            Membre::where('id',$id)->delete();
            return Redirect(route('association.membres.index',$association->slug))->with('succes','Membre supprimée');


        }
        else{
            return Redirect(route('association.membres.index',$association->slug))->with('succes','Suppression impossible, Veillez vous authentifier!');

        }
    }
}
