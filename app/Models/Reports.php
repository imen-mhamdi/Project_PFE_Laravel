<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_rap',
        'etat_carros',
        'km_vehicule_rapport',
        'code_veh',
        'matricule',
        'pneaumatique',
        'remarques'
        ];
   
}