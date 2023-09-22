<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showdata(){
        $showdata= Student::paginate(2);
        // $showdata= Student::all();

        return view('showdata',compact('showdata'));
    }
    public function adddata(){
        return view('adddata');
    }
    public function storedata(Request $request){
        $crud= new Student();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->Roll=$request->roll;
        $crud->save();

        session()->flash('success', 'Data saved successfully.');

        // Redirect back to the previous page
        return redirect('/showdata');
    }
    public function editdata($id=null){
       $editdata= Student::find($id);
       return view ('editdata',compact('editdata'));
    }
    public function updatedata(Request $request ,$id){
        $crud= Student::find($id);
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->Roll=$request->roll;
        $crud->save();

        session()->flash('success', 'Data saved successfully.');

        // Redirect back to the previous page
        return redirect('/showdata');
    }
    public function deletedata($id=null){
        $deletedata= Student::find($id);
        $deletedata-> delete();
        return redirect('/showdata');
     }
}
