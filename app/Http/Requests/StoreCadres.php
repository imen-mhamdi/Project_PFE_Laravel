<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreCadres extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'matricule' => [
                'required',
                'unique:employees'
            ],
            'grs' => [
                'required',
            
            ],
            'miss_c' => [
                'required',
            
            ],
           

            
        ];
    }

   
}