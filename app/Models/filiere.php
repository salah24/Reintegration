<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;
    protected $table ='filiere';
    protected $fillable = [
        'abbreviation_fil', '	libelle_fil',

    ];
    public function specialite(){
        return $this->belongsTo('App\Models\filiere' );
         }
         public function reintegration(){
            return $this->hasmany('App\Models\reintegration');
             }
}
