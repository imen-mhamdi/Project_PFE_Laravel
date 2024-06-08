<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneFactureVidange extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'Code_prd_vid',
        'Code_facture',
        'Qte_prd_vid_fac',
        'Prix_prd_vid_fac'
       ];
   
}