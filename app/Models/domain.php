<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
    use HasFactory;
    protected $table='domaine';
    protected $fillable = [
        'abbreviation_dom', 'libelle_dom', 'fac',
    ];
    public function faculte()
    {
     return $this->belongsTo('App\Models\domaine','fac');

    }
    public function reintegration(){
        return $this->hasmany('App\Models\reintegration');
         }
}
