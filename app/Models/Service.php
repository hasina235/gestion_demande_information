<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey = 'NumService';
    protected $fillable = [
        'NumService',
        'CodeRegion',
        'NomService'
    ];

    public static function getNumService()
    {
        $NumService = Service::all();
        return $NumService;
    }
}
