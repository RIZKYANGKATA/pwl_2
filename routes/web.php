<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PwlController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM: 2141720223, Nama: Rizky Angkata";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID $id";
// });

// PERTEMUAN 3

// PRAKTIKUM 1

// Route::get('/', [PwlController::class, 'index']);

// Route::get('/', [PwlController::class, 'home']);

// Route::prefix('/product')->group( function(){
//     Route::get('/list', [PwlController::class, 'product']);
// });

// Route::get('/news/{id}', [PwlController::class, 'news']);

// Route::prefix('/program')->group( function(){
//     Route::get('/list', [PwlController::class, 'program']);
// });

// Route::get('/aboutUs', [PwlController::class, 'aboutUs']);

// Route::get('/contactUs', [ContactUsController::class, 'contactUs']);

Route::get('/', [DasboardController::class, 'index']);

Route::get('/dasboard', [DasboardController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);