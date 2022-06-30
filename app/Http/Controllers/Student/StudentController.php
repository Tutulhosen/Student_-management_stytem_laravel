<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * create a student ddata
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'code'              =>'required',
            'firstName'         =>'required',
            'lastName'          =>'required',
            'age'               =>'required',
            'speciality'        =>'required',
        ]);
        Student::create([
            'code'                   =>$request->code,
            'first_name'             =>$request->firstName,
            'last_name'              =>$request->lastName,
            'age'                    =>$request->age,
            'speciality'             =>$request->speciality,
        ]);
        return back()->with('success', 'successfully add a student');
    }

    /**
     * edit student info page show
     */

    public function edit($id)
    {
        $edit_id= Student::findOrFail($id);
        $data= Student::latest()->get();
        $type= 'edit';
        return view('student.student', compact('type','data', 'edit_id'));
    }

    /**
     * update student data
     */
    public function update(Request $request, $id)
    {
        $update_data= Student::findOrFail($id);
        $this->validate($request, [
            'code'                   =>'required',
            'firstName'              =>'required',
            'lastName'               =>'required',
            'age'                    =>'required',
            'speciality'             =>'required',
        ]);
        $update_data->update([
            'code'                  =>$request->code,
            'first_name'            =>$request->firstName,
            'last_name'             =>$request->lastName,
            'age'                   =>$request->age,
            'speciality'            =>$request->speciality,
        ]);
        return redirect()->route('student.index')->with('success', 'successfully update the data');
    }

    public function destroy($id)
    {
        $delete_id=Student::findOrFail($id);
        $delete_id->delete();
        return back();
    }



}
