<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreEmployeeRequest extends FormRequest
{
    public function rules()
    {
        
        return [
            'nom' => [
               
                'required',
            ],
           
            'prenom' => [
               
                'required',
            ],
           
            'adresse' => [
               
                'required',
            ],
            //date_naissance
            'data_naissance' => [
               
                'required',
            ],
            
            //role
            'type' => [
                'required',
            ],

            //etat_precense
            'etat_precense' => [
                'required',
            ],
            //tel
            'tel' => [
                'required',
               
            ],
            
            'type_premis' => [
                'required',
               
            ],
        ];
    }

   
}