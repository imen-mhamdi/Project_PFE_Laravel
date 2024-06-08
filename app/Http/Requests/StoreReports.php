<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreReports extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'code_rap' => [
                'required',
                'unique:reports'
            ],
            'etat_carros' => [
              'required',
                
            ],
            'km_vehicule_rapport' => [
                'required',
                
            ],
            'code_veh' => [
                'required',
                
            ],
            'matricule' => [
                'required',
                
            ],
            'pneaumatique' => [
                'required',
                
            ],
            'remarques' => [
                'required',
                
            ],
            
         
           

            
        ];
    }

   
}