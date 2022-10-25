<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\Category\CategoriesController;
/**
 * @Route welcome route
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [BackendController::class, 'index']);
    Route::get('/category', [CategoriesController::class, 'index']);
});
