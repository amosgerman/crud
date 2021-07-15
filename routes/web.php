<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('students','StudentController');
Route::get('/2', function () {
    return view('welcome');
});