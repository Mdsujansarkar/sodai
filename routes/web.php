<?php

use Illuminate\Support\Facades\Route;

/**
 * @Route welcome route
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [App\Http\Controllers\Backend\BackendController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Backend\BackendController::class, 'index']);
});
