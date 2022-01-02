<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZakaznikControler;
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

Route::get('/', function () {return view('/hlavne/uvod');});
Route::get('/hlavne/registracia',function(){return view('hlavne/registracia');});
Route::get('/hlavne/prihlasenie',function(){return view('hlavne.prihlasenie');});
Route::get('/hlavne/odhlasenie', [ZakaznikControler::class,'logout'])->name('hlavne.prihlasenie');


Route::post('/hlavne/ulozit', [ZakaznikControler::class,'save'])->name('hlavne.ulozit');
Route::post('/hlavne/skontroluj', [ZakaznikControler::class,'check'])->name('hlavne.skontroluj');


Route::get('/prihlaseny/uvodPrihlaseny',function(){return view('/prihlaseny/uvodPrihlaseny');});

/*---------ADMIN---------------------------------*/
Route::get('/prihlasenyAdmin/uvodPrihlasenyAdmin',function(){return view('/prihlasenyAdmin/uvodPrihlasenyAdmin');});
Route::get('/prihlasenyAdmin/Zakaznici',[ZakaznikControler::class,'getAll'])->name('/prihlasenyAdmin/Zakaznici');
Route::get('/prihlasenyAdmin/delete/{id}',[ZakaznikControler::class,'delete']);
