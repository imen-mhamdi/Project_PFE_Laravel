<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidange extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'CODE_VID'
        ,'code_veh',
    'KM_VEH_VID',



];
   
}