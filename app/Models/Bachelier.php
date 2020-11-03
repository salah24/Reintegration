<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bachelier extends Model
{
    use HasFactory;
    protected $table ='bacheliers';
protected $fillable = [
    'nom', 'prenom','annee_obt','specialite','filiere','moyen_bac'
];
}
