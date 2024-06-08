<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactureCarburant extends Model
{
    use HasFactory;
    protected $fillable = [
        'N°_FAC_C'
        ,'MNT_T_FAC_C'];
   
}
