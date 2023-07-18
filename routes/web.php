<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

/*

*/

Route::get('/', [MainController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [MainController::class, 'show'])->name('comics.show');

Route::get('/comics/create', [MainController::class, 'create'])->name('comics.create');
Route::post('/comics', [MainController::class, 'store'])->name('comics.store');

Route::get('/comics/edit/{id}', [MainController::class, 'edit'])->name('comics.edit');
Route::put('/comics/update/{id}', [MainController::class, "update"])->name('comics.update');
