<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceRechangeNeuf extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_pie',
        'qty_pie',
        ];
   
}