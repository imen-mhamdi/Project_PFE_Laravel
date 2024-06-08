<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitVidange extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'Code_prd_vid',
        'Lib_prd_vid',
      'Typ_prd_vif',
      'Mod_prd_vid',
      'QTE_STK_Prd'
       ];
   
}