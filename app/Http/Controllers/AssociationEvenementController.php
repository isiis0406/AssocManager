<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Http\Requests\AssociationEvenementRequest;

class AssociationEvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $association = Association::where('slug',$slug)->first();
        $evenements = Evenement::where('association_id',$association->id);
        return view('association.evenement.index', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $association = Association::where('slug',$slug)->first();

        return view('association.evenement.create', compact('association'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationEvenementRequest $request, $slug)
    {

        $association = Association::where('slug',$slug)->first();
          
        Evenement::create([
            'nom' => $request->input('nom'),
            'ville' => $request->input('ville'),
            'Type' => $request->input('Type'),
            'date' => $request->input('date'),
            'tarif' => $request->input('tarif'),
            'association_id' => $association->id

        ]);

        return Redirect(route('association.evenement.index',$association->slug))->with('succes','Evènement ajouté.');

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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
