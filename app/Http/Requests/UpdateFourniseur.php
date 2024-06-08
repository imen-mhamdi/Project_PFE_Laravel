<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateFourniseur extends FormRequest
{
    public function rules()
    {
        return [
          
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