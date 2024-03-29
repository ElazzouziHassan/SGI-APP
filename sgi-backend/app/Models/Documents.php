<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'documentBacV', 'documentBacR', 'documentDiplome', 'documentCINV', 'documentCINR',
        'documentRelvetNoteBac', 'documentRelNoteS1', 'documentRelNoteS2', 'documentRelNoteS3', 'documentRelNoteS4',
        'photo', 'demandeManuscript',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
