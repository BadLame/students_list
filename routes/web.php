<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentsController::class, 'list'])->name('students.list');
Route::get('/student/{student}', [StudentsController::class, 'showEdit'])
    ->name('students.edit-show');
Route::post('/student/{student}', [StudentsController::class, 'update'])
    ->name('students.edit');
