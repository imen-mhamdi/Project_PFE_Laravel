<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneBonRet extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'code_piece',
        'N_br',
        'qte_pie'
       ];
   
}