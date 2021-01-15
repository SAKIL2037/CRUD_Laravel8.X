<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

    	$students = DB::table('student')->get();

    	return view('index')->with('students',$students);
    }


    public function addStudent()

    {
    	return view('addStudent');
    } 


    public function edit($id)

    {
    	$student = DB::table('student')->find($id);

    	return view('update')->with('student',$student);
    }

    public function delete($id)

    {
    	DB::table('student')->where('id', $id)->delete();

    	return redirect('/');
    }

    public function store(Request $request)
    
    {
    	DB::table('student')->insert([
			    'registration_id' => $request->registration_id,
		    	'name' => $request->name,
		    	'department' => $request->department_name,
		    	'info' => $request->info
			]);
    	return redirect('/');
    } 


    public function update(Request $request,$id)
    
    {

    	DB::table('student')
              ->where('id', $id)
              ->update([ 
              	'registration_id' => $request->registration_id,
		    	'name' => $request->name,
		    	'department' => $request->department_name,
		    	'info' => $request->info
		    ]);

    	return redirect('/');
    }
}
