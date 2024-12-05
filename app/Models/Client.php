<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Numcine',
        'nom',
        'prenom',
        'tele',
        'adresse',
        'serviceRequis',
        'dateDebut',
        'dateFin',
    ];

}
