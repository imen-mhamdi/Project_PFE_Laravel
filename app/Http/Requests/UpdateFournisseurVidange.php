<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateFournisseurVidange extends FormRequest
{
    public function rules()
    {
        return [
          
       
            'tel_frs' => [
                'required',
                
            ],
           
            
            
          

          
        ];
    }

   
}