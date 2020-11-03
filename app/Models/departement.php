<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;
    protected $table ='departement';
    protected $fillable = [
        'abbreviation_dept', 'libelle_dept', 'faculte',
    ];

     public function faculte(){
    return $this->belongsTo('App\Models\departement','faculte');
     }
     public function reintegration(){
        return $this->hasmany('App\Models\reintegration');
         }

}
