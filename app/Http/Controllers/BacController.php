<?php

namespace App\Http\Controllers;

use App\Models\Bachelier;
use Illuminate\Http\Request;

class BacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bac');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bac = Bachelier::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'moyen_bac'=>$request->moyen,
            'filiere'=>$request->filiere,
            'specialite'=>$request->specialite,
            'annee_obt'=>$request->annee,

        ]);
        if($bac){

            return redirect()->route('message')->with('success','Votre Demmande a été ajouter avec success');

        }
        return redirect()->back()->with('error','Votre Demmande a été rejuté');

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
