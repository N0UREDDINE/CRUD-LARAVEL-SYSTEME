<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('ListStudents',[StudentsController::class,'index']);
Route::get('AddStudents',[StudentsController::class,'AddStudents']);
Route::post('SaveStudents',[StudentsController::class,'SaveStudents']);
Route::get('EditStudents/{id}',[StudentsController::class,'EditStudents']);
Route::post('UpdateStudents',[StudentsController::class,'UpdateStudents']);
Route::get('DeleteStudents/{id}',[StudentsController::class,'DeleteStudents']);
