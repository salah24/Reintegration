<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculte extends Model
{         use HasFactory;
    protected $table ='faculte';
    protected $fillable = [
        'abbreviation_fac', 'libelle_fac',
    ];

    public function departement()
    {
     return $this->hasMany('App\Models\faculte','abbreviation_fac');

    }
 public function domaine(){
    return $this->hasMany('App\Models\faculte');
     }
     public function reintegration(){
        return $this->hasmany('App\Models\reintegration');
         }

}
