<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreProduitVidange extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'Code_prd_vid' => [
                'required',
                'unique:produit_vidanges',
                'max:8',
                'min:8',
            ],
            'Lib_prd_vid' => [
                'required',
            
            ],
            'Typ_prd_vif' => [
                'required',
            
            ],
            'Mod_prd_vid' => [
                'required',
            
            ],
            'QTE_STK_Prd' => [
                'required',
            
            ],
        
           

            
        ];
    }

   
}