<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AssociationRequest;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth',['except' => []]);
    } 
    public function index()
    {
        $associations = Association::where('user_id',Auth::user()->id)->get();
        return view('association.index', compact('associations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('association.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationRequest $request)
    {
        Association::create([
            'nom' => $request->input('nom'),
            'slug' => Str::slug($request->input('nom')),
            'domaine' =>$request->input('domaine'),
            'presentation' =>$request->input('presentation'),
            'user_id' => Auth::user()->id

        ]
        );

        return Redirect(route('association.index'))->with('succes','Bravo, votre association est oppérationnelle.');


    }

    /**
     * Display the specified resource.
     *
     * @param  string slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $association = Association::where('slug',$slug)->first();
        return view('association.show', compact('association'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $association = Association::where('slug',$slug)->first();
        return view('association.edit', compact('association'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string slug
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(AssociationRequest $request, $slug)
    {


        
        Association::where('slug',$slug)->update([
            'nom' => $request->input('nom'),
            'slug' => Str::slug($request->input('nom')),
            'domaine' =>$request->input('domaine'),
            'presentation' =>$request->input('presentation'),
            

        ]);
        return Redirect(route('association.index'))->with('succes','Association modifiée');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Association::where('slug',$slug)->delete();
        return Redirect(route('association.index'))->with('succes','Association supprimée');


    }
}
