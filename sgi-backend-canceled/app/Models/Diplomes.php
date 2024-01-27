<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomes extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id', 'Etablissement', 'Direction_provinciale', 'Promotion', 'type', 'Specialite', 'nb_annees',
        'Moyene_s1', 'Moyene_s2', 'Moyene_s3', 'Moyene_s4', 'Moyene_generale', 'nb_mention',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
