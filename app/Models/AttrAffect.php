<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrAffect extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'code_veh'
        ,'matricule',
    'date_debut',
    "date_fin",
"status"];
   
}