<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateEntretien extends FormRequest
{
    public function rules()
    {
        return [
           
           
            'km_vehicule' => [
               
                'required',
            ],
          
          

            'avis' => [
                'required',
               
            ],
          
        ];
    }

   
}