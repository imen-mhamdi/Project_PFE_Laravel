<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadre extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'matricule'
        ,'grs',
    'miss_c'];
   
}