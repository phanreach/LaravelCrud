<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD operations
Route::get('/insert', [StudentController::class, 'insert']);
Route::get('/update/{id}', [StudentController::class, 'update']);
Route::delete('/delete/{id}', [StudentController::class, 'delete']);
Route::get('/read', [StudentController::class, 'read']);
Route::get('/find/{id}', [StudentController::class, 'find']);

// Soft deletes
Route::delete('/softdelete/{id}', [StudentController::class, 'softDelete']);
Route::get('/readsoftdelete', [StudentController::class, 'readSoftDeleted']);
Route::patch('/restore/{id}', [StudentController::class, 'restore']);
Route::delete('/forcedelete/{id}', [StudentController::class, 'forceDelete']);
