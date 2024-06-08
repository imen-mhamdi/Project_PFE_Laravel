<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_entretien',
        'code_vh',
       
        'km_vehicule',
        'avis',
        'code_pie',
        'model_pie',
        "qte_pie",
  
    ];
}
