<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class FRontendController extends Controller
{
    /**
     * show index page
     */
    public function index()
    {   $data= Student::latest()->get();
        return view('student.student', compact('data'));
    }
    /**
     * create a student ddata
     */
    public function create(Request $request)
    {
        return $request->all();
    }

}
