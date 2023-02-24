<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/student',StudentController::class);
Route::resource('/student',StudentController::class);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::put('/update',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'delete']);
// Route::post('/store',[StudentController::class,'store']);
