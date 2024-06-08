<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreEmployeeChauffeur extends FormRequest
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
          

            //etat_precense
            'matricule' => [
                'required',
                'unique:employees'
            ],
            //tel
            'tel' => [
                'required',
                
            ],
        ];
    }

   
}