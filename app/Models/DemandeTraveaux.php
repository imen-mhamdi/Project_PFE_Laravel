<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeTraveaux extends Model
{
    use HasFactory;
    protected $fillable = [
        'CODE_DEM'
        ,'CODE_PIE',
        'Qte',
        'MATR_EMP'
    ];
   
}