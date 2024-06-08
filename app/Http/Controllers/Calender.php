<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Employees;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class Calender extends Controller
{
    public function store_data()
    {
        error_log(request('date'));
       
    }

 

 


   



}