<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\jobopening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class JobOpeningController extends Controller
{
      public function index(){
        return view("jobopening.index",['jobopening'=>jobopening::join('departments','jobopening.DepartmentId', '=','departments.id')
        ->select('jobopening.*','departments.departments')->get()]);
    }

    // public function department(){
    //     return view("jobopening.department",['jobopening'=>jobopening::get()]);
    // }


    public function create(){
       ;
        return view('jobopening.create',['departmentlist'=> departments::get()]);

    }

    public function store(Request $request){

        $jobopening = new jobopening;
        $jobopening->Title = $request->Title;
        $jobopening->Description = $request->Description;
        $jobopening->Vacancy= $request->Vacancy;
        $jobopening->Location = $request->Location;
        $jobopening->Type = $request->Type;
        $jobopening->DepartmentId = $request->DepartmentId;
        $jobopening->save();
       
        return redirect("/")->with('flash_message', 'job openings saved!'); 
    }

    public function edit($id){
        $jobopening = jobopening::where('id',$id)->first();
    
        return view('jobopening.edit',['jobopening' => $jobopening],['departmentlist'=> departments::get()]);
    }

    public function update(Request $request, $id) {

        $jobopening = jobopening::where('id', $id)->first();
        
        $jobopening->Title = $request->Title;
        $jobopening->Description = $request->Description;
        $jobopening->Vacancy= $request->Vacancy;
        $jobopening->Location = $request->Location;
        $jobopening->Type = $request->Type;
        $jobopening->DepartmentId = $request->DepartmentId;

        $jobopening->update();
        //return view("jobopening.index",['jobopening'=>jobopening::get()]);

        return redirect("/")->with('flash_message', 'job openings Updated!'); 
       

    }

    public function destroy($jobopening){
        $jobopening = jobopening::where('id',$jobopening)->first();
        $jobopening->delete();
        return true; 
    }
    public function show()
    {
        $jobopening_db= jobopening::join('departments','jobopening.DepartmentId', '=','departments.id')
        ->select('jobopening.*','departments.departments')->get();
         return response()->json([
                'status'   => true,
                'messages' => "Retrieved Successfully",
                'data' => $jobopening_db
        ]);
    }
}
