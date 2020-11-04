<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reintegration;
use PDF;

class PDFController extends Controller
{
    public function generatepdf(){

        $reintegration=reintegration::where('id_user',Auth()->user()->id)->first();
$data =[
'matricule'=>  $reintegration->matricule,
'nom'=>  $reintegration->nom,
'prenom'=>  $reintegration->prenom,
'date_naiss'=>  $reintegration->date_naiss,
'lieu_naiss'=>  $reintegration->lieu_naiss,
'nationalite'=>  $reintegration->nationalite,
'adress'=>  $reintegration->adress,
'email_reintg'=>  $reintegration->email_reintg,
'tel'=>  $reintegration->tel,
'libelle_dept'=>  $reintegration->libelle_dept,
'cycle'=>  $reintegration->cycle,
'annee_etud'=>  $reintegration->annee_etud,
'libelle_dom'=>  $reintegration->libelle_dom,
'libelle_fil'=>  $reintegration->libelle_fil,
'libelle_specia'=>  $reintegration->libelle_specia,
'annee_inscrip'=>  $reintegration->annee_inscrip,
'annee_abond'=>  $reintegration->annee_abond,
'motif_abond'=>  $reintegration->motif_abond

];
        $pdf = PDF::loadView('liste',  $data);
    
        return $pdf->download('liste.pdf');
    }
}
