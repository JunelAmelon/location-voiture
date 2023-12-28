<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individus extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_user',
        'prenom_user',
        'sexe_user',
    ];
}
