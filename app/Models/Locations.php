<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_voiture',
        'id_individu',
    ];

    // Définir la relation avec la table 'voitures'
    public function voiture()
    {
        return $this->belongsTo(Voitures::class, 'id_voiture');
    }

    // Définir la relation avec la table 'individus'
    public function individu()
    {
        return $this->belongsTo(Individus::class, 'id_individu');
    }
}
