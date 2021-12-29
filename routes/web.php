<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterControler;
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


Route::get('/hlavne/prihlasenie', [LoginRegisterControler::class,'login'])->name('hlavne.prihlasenie');
Route::get('/hlavne/registracia',[LoginRegisterControler::class,'register'])->name('hlavne.registracia');
Route::post('/hlavne/ulozit', [LoginRegisterControler::class,'save'])->name('hlavne.ulozit');
Route::post('/hlavne/skontroluj', [LoginRegisterControler::class,'check'])->name('hlavne.skontroluj');

Route::get('/prihlaseny/uvodPrihlaseny',[LoginRegisterControler::class,'uvodPrihlaseny'])->name('prihlaseny.uvodPrihlaseny');
Route::get('/prihlasenyAdmin/uvodPrihlasenyAdmin',[LoginRegisterControler::class,'uvodPrihlasenyAdmin'])->name('prihlasenyAdmin.uvodPrihlasenyAdmin');



