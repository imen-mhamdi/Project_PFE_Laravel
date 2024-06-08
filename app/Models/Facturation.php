<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_facture',
        'code_frs',
        'code_pie',
        'model_pie',
      
        "qte_pie",
      
        'prix'
    ];
}
