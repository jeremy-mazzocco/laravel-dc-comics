<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\MainController;

/*

*/

Route::get('/', [MainController::class, "index"])->name('comics.index');
