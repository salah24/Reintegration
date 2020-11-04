<?php

namespace App\Http\Controllers;
use App\Models\faculte;
use App\Models\departement;
use App\Models\Diplom;
use App\Models\filiere;
use App\Models\specialite;
use App\Models\User;
use PDF;
use App\Models\reintegration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\email;
use App\Models\Bachelier;
use App\Models\domain;
use Illuminate\Support\Facades\Mail;


class ReintegrationController extends Controller
{


    public function index()
    {
  $reintegration=reintegration::all();
  $domain=domain::all();
  $faculte=faculte::all();
  $specialite=specialite::all();
  $filiere=filiere::all();
  $dept=departement::all();
        return view('demmandes',compact('domain','faculte','dept','specialite','filiere'));

    }
public function allReintegration(){


   $reintegrat = reintegration::paginate(10);
 //   $reintegrationAdmin=reintegration::paginate(5);
  return view('reintegrat', compact('reintegrat'));
}


   // public function reservation(){

  // return $this->eventsToArray(reservation::all());
   // }
    //public function eventsToArray($events){
     // $eventArray =[];
     // foreach($events as $event){

       //   $data =[
                 //   "title" => $event->evenement->evenement,
                  //  "start" =>$event->start,
                   // "end" => $event->start,
                   // "color" => "green",
                    //"seance"=>$event->seance_fin ,
         // ];
         // array_push($eventArray,$data);
     // }
      //return response()->json($eventArray);

    //}






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {

            $reintegrationAll= reintegration::create([
                'nom'          =>$request->nom,
                'prenom'          =>$request->prenom,
                'matricule'      =>$request->matricule,
                'lieu_naiss'          =>$request->lieu_naiss,
                'date_naiss'             =>$request->date_naiss,
                'nationalite'               =>$request->nationalite,
                'adresse'            =>$request->adresse,
                'email_reintg'        =>$request->email_reintg,
                'tel'        =>$request->tel,
                'cycle'        =>$request->cycle,
                'annee_etud'  =>$request->annee_etud,
                'domaine'  =>$request->domaine,
                'dept'  =>$request->dept,
                'fac'        =>$request->fac,
                'fil'  =>$request->fil,
                'specialite'  =>$request->specialite,
                'annee_inscrip'  =>$request->annee_inscrip,
                'annee_abond'  =>$request->annee_abond,
                'motif_abond'  =>$request->motif_abond,
                'id_user'  =>$request->id_user,
            ]);

           $reintegrationAll->save();

           if($reintegrationAll){
           

            return redirect()->route('print1')->with('success','Votre reintegration a été ajouter avec success');
          
           }


return redirect()->back()->with('error','Votre demmande est refusée');
}

public function userId(){
  
    $reintegration=reintegration::where('id_user',Auth()->user()->id)->first();
    
    return view('liste',compact('reintegration'));

}
    public function show($id)
    {

    }

    public function bac(){
      return view('bac');
    }
    public function listes(){
      return view('listes');
    }
    public function liste_bac(){

      $bac =Bachelier::paginate(10);
      return view('liste_bac',compact('bac'));
    }
    public function liste_diplom(){

      $diplom =Diplom::paginate(10);
      return view('liste_diplom',compact('diplom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  ///  public function edit($id)
   // {
       // $tomorrow = Carbon::tomorrow()->format('Y.m.d');
      //  $evenements = evenement::all();
       // $salles = salle::all();
       // $reservation=reservation::find($id);
   /// return view('reservation.edit',compact('reservation','tomorrow','evenements','salles'));
//}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function update(Request $request, $id)
    //{

     //$request->validate([
        // 'reservation' => 'required',
         //'id_users'=> 'required',
         //'id_evenement'=> 'required',
        // 'id_salle'=> 'required',
         //'start'=> 'required',
       //  'end'=> 'required',
        // 'description' => 'nullable',
         //'seance' =>'required'

    // ]);
    // $reservation = reservation::find($id);
    // $reservation->reservation= $request->id_users;
     //$reservation->reservation= $request->id_evenement;
    // $reservation->reservation= $request->id_salle;
     //$reservation->reservation= $request->start;
     //$reservation->reservation= $request->end;
    // $reservation->description = $request->description;
    // $reservation->seance = $request->seance;

    // $reservation->save();
        //return redirect()->route('reservations.index')->with('success','Votre reservation a été modifié avec success');
   // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //public function destroy($id)
    //{
        //
   /// }







    //public function mailsend()
    //{
      // $details = [
           // 'title' => 'Title: Mail from Real Programmer',
            //'body' => 'Body: This is for testing email using smtp'
       // ];

      //  Mail::to('salahcyb@gmail.com')->send(new email($details));
      //  return view('emails.thanks');
   // }
  //  public function confirmation($id){
       // $reservation=reservation::find($id);

        //if($reservation){
         //   $reservation->status ='1';
          //  $reservation->save();
           // $details = [
             //   'title' => 'La confirmation a été effectuer'. ' Le ' .$reservation->start.
               // $reservation->seance.'à' .        $reservation->end. ' à la salle ',
               // 'body' => 'Merci'
           // ];
           // Mail::to('salahcyb@gmail.com')->send(new email($details));
            //return redirect()->route('allReservation')->with('success','Votre confirmation a été effectuer');
       // }

   // }

   public function destroy_bac($id)
   {
       $bac=Bachelier::find($id);
       $bac->delete();
       return redirect()->back()->with('success','Votre supprission a été effectuer');

  }
  public function destroy_diplom($id)
  {
      $diplom=Diplom::find($id);
      $diplom->delete();
      return redirect()->back()->with('success','Votre supprission a été effectuer');

 }

 public function destroy_reintegration($id)
 {
     $reintegration=reintegration::find($id);
     $reintegration->delete();
     return redirect()->back()->with('success','Votre supprission a été effectuer');

}

}
