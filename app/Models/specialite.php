<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;
    protected $table ='specialite';
    protected $fillable = [
        'abbreviation_sp', '	libelle_specia', '	fil'
    ];
    public function filiere(){
        return $this->hasMany('App\Models\filiere\fil' );
         }
         public function reintegration(){
            return $this->hasmany('App\Models\reintegration');
             }

}
