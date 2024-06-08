<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'code_veh'
        ,'date_mise_serv',
    'chass',
'imaat_veh',
'marq_veh',
'date_miss_serv',
'puiss_fisc',
'modele_veh',
'energie',
'etat_veh',


];
   
}