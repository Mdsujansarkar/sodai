<?php

use Illuminate\Support\Facades\Route;

/**
 * @Route welcome route
 */

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin', [BackendController::class, 'index']);
//Route::get('/admin', [BackendController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\Backend\BackendController::class, 'index']);