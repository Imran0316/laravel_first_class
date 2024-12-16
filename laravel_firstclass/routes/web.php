<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'data']);
Route::get('/check',[StudentController::class,'check']);
Route::get('/inform',[StudentController::class,'inform']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('check', function () {
//     return view('check');
// });
// Route::get('inform', function () {
//     return view('inform');
// });