<?php

use App\Http\Controllers\EcoController;
use Illuminate\Support\Facades\Route;

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


Route::get('/barang', [EcoController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [EcoController::class, 'create'])->name('barang.create');
Route::post('/barang', [EcoController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}', [EcoController::class, 'show'])->name('barang.show');
Route::get('/barang/{id}/edit', [EcoController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [EcoController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [EcoController::class, 'destroy'])->name('barang.destroy');