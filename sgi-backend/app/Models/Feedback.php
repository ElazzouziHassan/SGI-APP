<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id', 'content',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
