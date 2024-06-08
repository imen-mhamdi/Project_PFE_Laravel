<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Employees;
use App\Models\Calenders;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Chaffeur;
use App\Models\Cadre;
use App\Models\Responsables;
use App\Models\Ouvrier;
use App\Models\Mecanicien;
class Employee extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        $employees = Employees::all();
       
        if($role=="1"){
            return view("responsable");
        }
        if($role=="2"){
            return view("employee",compact('employees'));
        }else{
            return view("dashboard");
        }
       
    }

    public function create()
    {

        return view('employee.create');
    }
    public function store(StoreEmployeeRequest $request)
    {
       
       
        Employees::create($request->validated());
       
        return redirect()->route('employee.index');
    }

    public function show(Employees $employee)
    {
        $id=  $employee->id;
        $calender = Calenders::where([
            'id_employee' => $employee->id])->get();
     
        return view('employee.show', compact('employee',"calender","id"));
    }

    
     public function calender(Employees $employee,calender $calender)
     {  
         echo "hi";
       
     }
    



     public function edit(Employees $employee)
    {
        $cadre =Cadre::where([
            'matricule' => $employee->matricule])->get();
        $chaffeur =Chaffeur::where([
            'matricule' => $employee->matricule])->get();
        $responsables =Responsables::where([
                'matricule' => $employee->matricule])->get();
        $ouvrier =Ouvrier::where([
                    'matricule' => $employee->matricule])->get();
        $mecanicien=Mecanicien::where([
            'matricule' => $employee->matricule])->get();

        return view('employee.edit', compact('employee','cadre','chaffeur',
    'responsables','ouvrier','mecanicien'
    ));
    }

    public function update(UpdateEmployeeRequest $request, Employees $employee)
    {
        $employee->update($request->validated());

        return redirect()->route('employee.index');
    }


   



}

