<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenoms', 
        'telephone', 
        'sous_direction', 
        'fonction', 
        'email', 
        'direction', 
        'role',
        'matricule'
         // On inclut la colonne role
    ];
}
