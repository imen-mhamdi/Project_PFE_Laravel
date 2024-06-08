<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateProduitVidange extends FormRequest
{
    public function rules()
    {
        return [
          
          
           
            'Mod_prd_vid' => [
                'required',
                
            ],

            'Typ_prd_vif' => [
                'required',
                
            ],
         
           
          
            
          

          
        ];
    }

   
}