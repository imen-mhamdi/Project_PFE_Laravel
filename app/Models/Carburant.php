<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    use HasFactory;
    protected $fillable = [
        'TYPE_CARB'
        ,'FRS_CARB','NB_LITRES_STK'];
   
}
