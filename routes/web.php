<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentsController::class, 'list'])->name('students.list');
