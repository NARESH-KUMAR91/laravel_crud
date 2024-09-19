<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/show', [HomeController::class,'show']); 
Route::post('/home', [HomeController::class,'submit']);
Route::get('/list', [HomeController::class,'studentListing']);
Route::get('/studentlist-edit/{id}', [HomeController::class, 'editStudent']);
Route::get('/studentlist-delete/{id}', [HomeController::class, 'deleteStudent']);
Route::post('/studentlist-update/{id}', [HomeController::class, 'updateStudent']);
