<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baccalaureats extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'Etablissement', 
        'Direction_provinciale', 
        'Session', 
        'Serie', 
        'Filiere', 
        'Mention', 
        'Moyene_generale',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
