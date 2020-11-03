<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reintegration extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $table ='reintegration';
    protected $fillable = [
        'nom', 'prenom', 'date_naiss','lieu_naiss','nationalite','annee_inscrip','annee_etud','matricule','id_user',
         'adresse','email_reintg','tel','fac','dept','domaine','specialite','fil',
        'cycle','annee_abond','motif_abond',
    ];
    public function specialite(){
        return $this->belongsTo('App\Models\specialite','specialite');
         }
         public function filiere(){
            return $this->belongsTo('App\Models\filiere','fil');
             }
             public function domaine(){
                return $this->belongsTo('App\Models\domaine','domaine');
                 }
                 public function departement(){
                    return $this->belongsTo('App\Models\departement','dept');
                     }
                     public function faculte(){
                        return $this->belongsTo('App\Models\faculte','fac');
                         }
}
