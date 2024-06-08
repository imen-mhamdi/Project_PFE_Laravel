<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreFournisseurVidange extends FormRequest
{
    public function rules()
    {
        
        return [
            //etat_precense
            'code_frs' => [
                'required',
                'unique:fournisseur_vidanges',
                'max:8',
                'min:8',
            ],
            'nom_frs' => [
                'required',
            
            ],
            'prenom_frs' => [
                'required',
            
            ],
            'adresse_frs' => [
                'required',
            
            ],
            'tel_frs' => [
                'required',
            
            ],
           

            
        ];
    }

   
}