<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceRechOcc extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'code_piece',
        'qte_piece_occ',
      
       ];
   
}