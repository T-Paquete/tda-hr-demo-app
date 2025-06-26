<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftController;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for ShiftController
// This will create routes for index, create, store, show, edit, update, and
Route::resource('shifts', ShiftController::class);
