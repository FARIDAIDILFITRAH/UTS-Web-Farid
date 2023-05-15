<?php

use App\Http\Controllers\PenyakitMenularController;
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
    return view('welcome');
});
Route::get('/', [PenyakitMenularController::class, 'index']);
Route::get('/tambah', [PenyakitMenularController::class, 'tambah']);
Route::post('/tambah', [PenyakitMenularController::class, 'store']);
Route::get('/hapus/{id}', [PenyakitMenularController::class, 'hapus']);
Route::get('/edit/{id}', [PenyakitMenularController::class, 'edit']);
Route::post('/edit/{id}', [PenyakitMenularController::class, 'update']);
Route::get('/lihat/{id}', [PenyakitMenularController::class, 'lihat']);

