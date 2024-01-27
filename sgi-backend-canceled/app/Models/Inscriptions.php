<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id', 'formation_id', 'status',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
