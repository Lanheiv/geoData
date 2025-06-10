<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::put('/list/{country}', [CountryController::class, "update"]);
Route::post('/list', [CountryController::class, "store"]);
Route::get('/list', [CountryController::class, "index"]);

Route::delete('/delete/{country}', [CountryController::class, "destroy"]);

Route::get('/create', [CountryController::class, "create"]);
Route::get('/show/{country}', [CountryController::class, 'show']);
Route::get('/edit/{country}', [CountryController::class, 'edit']);




