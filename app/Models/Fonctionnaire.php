<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenoms', 
        'matricule', 
        'telephone', 
        'sous_direction', 
        'fonction', 
        'email', 
        'direction', 
        'role' // On inclut la colonne role
    ];
}
