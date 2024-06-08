<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateReport extends FormRequest
{
    public function rules()
    {
        return [
          
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