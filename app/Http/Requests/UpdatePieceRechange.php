<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdatePieceRechange extends FormRequest
{
    public function rules()
    {
        return [
          
            'lib_pie' => [
              'required',
                
            ],
            'marq_pie' => [
                'required',
                
            ],
            'qty_pie' => [
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