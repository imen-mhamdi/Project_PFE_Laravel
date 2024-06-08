<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateVehiculeRequest extends FormRequest
{
    public function rules()
    {
        return [
           
               //etat_precense
            
           
            'chass' => [
                'required',
            
            ],
            'imaat_veh' => [
                'required',
            
            ],
            'marq_veh' => [
                'required',
            
            ],
            'puiss_fisc' => [
                'required',
            
            ],
            'modele_veh' => [
                'required',
            ],
            'energie' => [
                'required',
            
            ],
            'etat_veh' => [
                'required',
            
            ],
          
        ];
    }

   
}