<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEmployeeRequest;
class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role=="1"){
            return view("responsable");
        }
        if($role=="2"){
            return view("chef");
        }
        else{
            return view("dashboard");
        }
    }
}