<?php

use App\Http\Controllers\Student\FrontendController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//frontend route
Route::get('/', [FrontendController::class, 'index'])->name('student.index');


//student route
Route::post('/', [StudentController::class, 'create'])->name('student.create');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('edit/{id}', [StudentController::class, 'update'])->name('student.update');