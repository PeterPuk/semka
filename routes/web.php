<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZakaznikControler;
use \App\Http\Controllers\TopankaControler;
use \App\Http\Controllers\HodnotenieControler;
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
Route::get('/hlavne/panske',[TopankaControler::class,'getPanske'])->name('/hlavne/panske');
Route::get('/hlavne/damske',[TopankaControler::class,'getDamske'])->name('/hlavne/damske');

Route::get('/hlavne/detail/{id}',[TopankaControler::class,'detaily']);

/*--------------------ZAKAZNIK-----------*/
Route::post('/hlavne/ulozit', [ZakaznikControler::class,'save'])->name('hlavne.ulozit');
Route::post('/hlavne/skontroluj', [ZakaznikControler::class,'check'])->name('hlavne.skontroluj');
Route::post('/prihlaseny/updateMeno', [ZakaznikControler::class,'updateMeno'])->name('prihlaseny.updateMeno');
Route::post('/prihlaseny/updatePriezvisko', [ZakaznikControler::class,'updatePriezvisko'])->name('prihlaseny.updatePriezvisko');
Route::post('/prihlaseny/updateMail', [ZakaznikControler::class,'updateMail'])->name('prihlaseny.updateMail');
Route::post('/prihlaseny/updateCislo', [ZakaznikControler::class,'updateTelCislo'])->name('prihlaseny.updateCislo');
Route::post('/prihlaseny/updateHeslo', [ZakaznikControler::class,'updateHeslo'])->name('prihlaseny.updateHeslo');
Route::get('/prihlaseny/uvodPrihlaseny',function(){return view('/prihlaseny/uvodPrihlaseny');});
Route::get('/prihlaseny/profil',[ZakaznikControler::class,'getAll'])->name('/prihlaseny/profil');
Route::get('/prihlaseny/panskePrihlaseny',[TopankaControler::class,'getPanskePrihlaseny'])->name('/prihlaseny/panskePrihlaseny');
Route::get('/prihlaseny/damskePrihlaseny',[TopankaControler::class,'getDamskePrihlaseny'])->name('/prihlaseny/damskePrihlaseny');

Route::get('/prihlaseny/detailPrihlaseny/{id}',[TopankaControler::class,'detailyPrihlaseny']);
/*---------ADMIN---------------------------------*/
Route::get('/prihlasenyAdmin/uvodPrihlasenyAdmin',function(){return view('/prihlasenyAdmin/uvodPrihlasenyAdmin');});
Route::get('/prihlasenyAdmin/pridatTenisku',function(){return view('/prihlasenyAdmin/pridatTenisku');});

Route::post('/prihlasenyAdmin/updateMailAdmin', [ZakaznikControler::class,'updateMailAdmin'])->name('prihlasenyAdmin.updateMailAdmin');
Route::post('/prihlasenyAdmin/updateHesloAdmin', [ZakaznikControler::class,'updateHesloAdmin'])->name('prihlasenyAdmin.updateHesloAdmin');
Route::get('/prihlasenyADmin/uvodPrihlasenyAdmin',function(){return view('/prihlasenyADmin/uvodPrihlasenyAdmin');});

Route::get('/prihlasenyAdmin/profilAdmin',[ZakaznikControler::class,'getAllAdmin'])->name('/prihlasenyAdmin/profilAdmin');
Route::get('/prihlasenyAdmin/Zakaznici',[ZakaznikControler::class,'getAllZakaznici'])->name('/prihlasenyAdmin/Zakaznici');
Route::get('/prihlasenyAdmin/delete/{id}',[ZakaznikControler::class,'delete']);

/*---------TENISKY-----------------*/
Route::get('/prihlasenyAdmin/Tenisky',function(){return view('/prihlasenyAdmin/Tenisky');});

Route::post('/prihlasenyAdmin/ulozit', [TopankaControler::class,'save'])->name('prihlasenyAdmin.ulozit');
Route::get('/prihlasenyAdmin/Tenisky',[TopankaControler::class,'getAll'])->name('/prihlasenyAdmin/Tenisky');
Route::get('/prihlasenyAdmin/delete/{id}',[TopankaControler::class,'delete']);


/*-------------HODNOTENIA----------------*/

Route::post('/prihlaseny/detailPrihlaseny/ulozitHodnotenie/{id}/{id_zakaznik}', [HodnotenieControler::class,'save']);

