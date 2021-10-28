<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PersonController::class,'index'])->name('mainhome');
Route::resource('person',PersonController::class);
