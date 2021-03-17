<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $employee = Employee::all();
      return view("employees", compact("employee"));
    }
    public function show($id){
      $employeeData = Employee::findOrFail($id);
      return view("emp-show", compact("employeeData"));
    }
    public function create(){
      return view('create-employee');
    }
    public function store(Request $request){
      $data = $request -> all();
      $employee = Employee::create($data);
      return redirect() -> route('index');
    }
    public function destroy($id){
      $employeeData = Employee::findOrFail($id);
      $employeeData -> delete();
      return redirect() -> route('index');
    }
    public function edit($id){
      $employeeData = Employee::findOrFail($id);
      return view('emp-edit', compact('employeeData'));
    }
    public function update(Request $request, $id){
      $data = $request -> all();
      $employeeData = Employee::findOrFail($id);
      $employeeData -> update($data);
      return redirect() -> route('index');
    }
    public function graphic(){
      return view('graphic');
    }
}
