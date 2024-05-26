<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\imageController;

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
    return view('content.dashboard');
});

Route::get('/dashboard',[HomeController::class, 'index']);

//TEXT
Route::get('/dekripsi-text',[HomeController::class, 'dekripsi'])->name('dekripsi-text');
Route::post('/proses-dekripsi', [HomeController::class, 'dekripsi_proses'])->name('proses-dekripsi');

Route::get('/enkripsi-text',[HomeController::class, 'enkripsi'])->name('enkripsi-text');
Route::post('/proses-enkripsi', [HomeController::class, 'enkripsi_proses'])->name('proses-enkripsi');

//IMAGE

Route::get('/dekripsi-image',[imageController::class, 'dekripsiImg'])->name('dekripsi-image');
Route::post('/proses-dekripsi-image', [imageController::class, 'dekripsiImg_proses'])->name('proses-dekripsi-image');

Route::get('/enkripsi-image',[imageController::class, 'enkripsiImg'])->name('enkripsi-text-image');
Route::post('/proses-enkripsi-image', [imageController::class, 'enkripsiImg_proses'])->name('proses-enkripsi-image');