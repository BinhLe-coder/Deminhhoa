<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'get_all_student'])->name('home');

Route::get('/student_manage',[StudentController::class,'get_all_student']);

Route::get('/{id}/edit',[StudentController::class,'get_student_by_id']);

Route::put('/{id}/edit',[StudentController::class,'edit']);

Route::get('/{id}/delete',[StudentController::class,'delete']);

Route::get('/student_add',[StudentController::class,'add'])->name('add');
Route::post('/student_add',[StudentController::class,'store']);





