<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BalitaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route desa
Route::get('/desa', [DesaController::class, 'index'])->middleware('auth');
Route::get('/desa/form/', [DesaController::class, 'create'])->middleware('auth');
Route::post('/desa/store/', [DesaController::class, 'store'])->middleware('auth');
Route::get('/desa/edit/{id}', [DesaController::class, 'edit'])->middleware('auth');
Route::put('/desa/{id}', [DesaController::class, 'update'])->middleware('auth');

// route desa
Route::get('/petugas', [PetugasController::class, 'index'])->middleware('auth');
Route::get('/petugas/form/', [PetugasController::class, 'create'])->middleware('auth');
Route::post('/petugas/store/', [PetugasController::class, 'store'])->middleware('auth');
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit'])->middleware('auth');
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->middleware('auth');

// route desa
Route::get('/balita', [BalitaController::class, 'index'])->middleware('auth');
Route::get('/balita/form/', [BalitaController::class, 'create'])->middleware('auth');
Route::post('/balita/store/', [BalitaController::class, 'store'])->middleware('auth');
Route::get('/balita/edit/{id}', [BalitaController::class, 'edit'])->middleware('auth');
Route::put('/balita/{id}', [BalitaController::class, 'update'])->middleware('auth');
