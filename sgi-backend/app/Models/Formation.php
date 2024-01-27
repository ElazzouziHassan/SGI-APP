<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Filiere', 'nb_etudiants', 'duree', 'date_debut', 'promotion',
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscriptions::class);
    }
}
