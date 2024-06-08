<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StorePieceRechangeNeuf extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'code_pie' => [
                'required',
                'unique:piece_rechange_neufs',
                'max:8',
                'min:8',
            ],
            'qty_pie' => [
                'required',
            
            ],
        
           

            
        ];
    }

   
}