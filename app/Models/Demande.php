<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $primaryKey = 'NumDemande';
    protected $fillable = [
        'NumDemande',
        'NumDemandeur',
        'NumService',
        'objet',
        'detail',
        'thematique',
        'datedemande',
        'dateexpiration'
    ];
}
