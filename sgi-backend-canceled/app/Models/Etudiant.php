<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'email', 'CodeMassar', 'CIN', 'adresse_fr', 'adresse_ar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasOne(Documents::class);
    }

    public function diplomes()
    {
        return $this->hasOne(Diplomes::class);
    }

    public function baccalaureat()
    {
        return $this->hasOne(Baccalaureats::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscriptions::class);
    }
}
