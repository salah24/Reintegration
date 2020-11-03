<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diplom;
class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diplome');
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
        $deplom = Diplom::create([

                    'nom'       =>         $request->nom,
                    'prenom'    =>         $request->prenom,
                    'annee_obt' =>         $request->annee,
                    'filiere'   =>         $request->filiere,
                    'specialite'=>         $request->specialite,
                    'moyen_bac' =>         $request->moyen,
                    'univ'      =>         $request->univ,
                    'diplom'    =>         $request->diplom
                  


        ]);
        if($deplom){

            return redirect()->route('message')->with('success','لقد تم تسجيلك بنجاح الرجاء التواصل مع الموؤسسة مرفوق بشهادة البكالوريا من 08 إلى غاية 16 نوفمبر');

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
