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
}
