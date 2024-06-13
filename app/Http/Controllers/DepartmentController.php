<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department(){
        return view("departments.department",['departments'=>departments::get()]);
    }

    public function create(){
        return view('departments.create');
    }

    public function store(Request $request){
       // dd($request);
        $departments = new departments;
        $departments->Departments= $request->Departments;
        $departments->save();
       
        return redirect("/dept")->with('flash_message', 'Department list saved!'); 
    }
    public function edit($id){
        $departments = departments::where('id',$id)->first();
    
        return view('departments.edit',['departments' => $departments]);
    }

    public function update(Request $request, $id) {

        $departments = departments::where('id', $id)->first();
        
        $departments-> Departments= $request->Departments;
        $departments->update();
        return redirect("/dept")->with('flash_message', 'Department list Updated!'); 
       

    }

    public function destroy($departments){
        $departments = departments::where('id',$departments)->first();
        $departments->delete();
        return true; 
    }


}
