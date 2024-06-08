<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdatePieceRechangeNeuf extends FormRequest
{
    public function rules()
    {
        return [
          
          
           
            'qty_pie' => [
                'required',
                
            ],
         
           
          
            
          

          
        ];
    }

   
}