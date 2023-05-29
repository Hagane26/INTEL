<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\utama;
use App\Http\Controllers\InProdiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [utama::class,'index'])->name('utama');;

//Login
Route::get('/login',[LoginController::class,'login']);
Route::post('/actionlogin',[LoginController::class,'actionLogin'])->name('actionLogin');
Route::get('/actionlogout',[LoginController::class,'actionLogout'])->name('actionLogout');
Route::get('/test',[DosenController::class,'test']);

//Dosen
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/dosenjson',[DosenController::class,'indexData']);
Route::get('/dosen/add',[DosenController::class,'create']);
Route::post('/dosen/add',[DosenController::class,'store']);

//Status Change
Route::get('dosen/prodi/{id}',[InProdiController::class,'update']);

//Sender WA
Route::get('dosen/sender',[InProdiController::class,'index']);

//Pengumuman
Route::get('/pengumuman',[PengumumanController::class,'index']);
Route::get('/pengumuman/add',[PengumumanController::class,'create']);
Route::post('/pengumuman/add',[PengumumanController::class,'store']);
