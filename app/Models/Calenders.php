<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calenders extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_employee'
        ,'date','etat_presence'];
   
}
