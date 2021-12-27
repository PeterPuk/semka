<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('/hlavne/uvod');
});

Route::get('/prihlasenie', function (){
    return view('hlavne/prihlasenie');
});

Route::get('/registracia', function (){
    return view('hlavne/registracia');
});
