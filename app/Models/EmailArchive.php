<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailArchive extends Model
{
    use HasFactory;
    // Autorise l’écriture sur les colonnes suivantes
    protected $fillable = [
        'subject',
        'to',
        'cc',
        'bcc',
        'body',
        'type',
    ];

    // (Optionnel) Caster les champs JSON
    protected $casts = [
        'to' => 'array',
        'cc' => 'array',
        'bcc' => 'array',
    ];
}
