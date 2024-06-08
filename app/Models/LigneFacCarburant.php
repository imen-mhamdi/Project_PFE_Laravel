<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneFacCarburant extends Model
{
    use HasFactory;
    protected $fillable = [
        'NB_LTR_F_C'
        ,'PRIX_LTR',
    'N°_FAC_C',
'TYPE_CARB'];
   
}
