<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceRechange extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_pie',
        'lib_pie',
        'marq_pie', 
        'modele_pie',
        'type_pie',
        ];
   
}