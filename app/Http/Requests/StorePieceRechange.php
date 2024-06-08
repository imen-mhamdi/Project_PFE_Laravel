<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StorePieceRechange extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'code_pie' => [
                'required',
                'unique:piece_rechanges',
                'max:8',
                'min:8',
            ],
            'lib_pie' => [
                'required',
            
            ],
            'marq_pie' => [
                'required',
            
            ],
           
            'modele_pie' => [
                'required',
            
            ],
            'type_pie' => [
                'required',
            
            ],
           

            
        ];
    }

   
}