<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;
    protected $primaryKey = 'NumDemandeur';
    protected $fillable = [
        'NumDemandeur',
        'NumCategorie',
        'noms',
        'telephone',
        'mail',
        'adresse'
    ];
}
