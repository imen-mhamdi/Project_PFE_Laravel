<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreResponsable extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'matricule' => [
                'required',
                'unique:employees'
            ],
            
            'miss_r' => [
                'required',
            
            ],
           

            
        ];
    }

   
}