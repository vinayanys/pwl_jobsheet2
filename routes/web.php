<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SelamatDatangController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\ArticleController;

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

// route untuk menampilkan method dari controller WelcomeController
Route::get('/hello', [WelcomeController::class, 'hello']);

// route untuk menampilkan method dari controller SelamatDatangController
Route::get('/', [SelamatDatangController::class, 'selamatdatang']);

// route untuk menampilkan method dari controller DataMahasiswaController
Route::get('/about', [DataMahasiswaController::class, 'datamahasiswa']);

// route untuk menampilkan method dari controller ArticleController
Route::get('/articles/{id}', [ArticleController::class, 'artikel']);
