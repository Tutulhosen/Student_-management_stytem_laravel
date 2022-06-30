<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FRontendController extends Controller
{
    /**
     * show index page
     */
    public function index()
    {
        return view('student.student');
    }
}
