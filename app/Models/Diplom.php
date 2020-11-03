<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplom extends Model
{
    use HasFactory;
    protected $table ='diploms';
protected $fillable = [
    'nom', 'prenom','annee_obt','specialite','filiere','moyen_bac','diplom','univ'
];
}
