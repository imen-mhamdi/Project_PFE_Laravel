<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FournisseurVidange extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'code_frs'
        ,'nom_frs',
    'prenom_frs',
    "adresse_frs",
"tel_frs"];
   
}