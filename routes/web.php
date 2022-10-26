<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\Category\CategoriesController;
/**
 * @Route welcome route
 */

Route::group(['prefix'=>'admin'], function(){
    /**
     * Deshboard Routing
     */
    Route::get('/', [BackendController::class, 'index']);

    /**
     * Category Section CRUD Oparation
     */
    Route::group(['prefix'=>'category'], function(){
        Route::get('/', [CategoriesController::class, 'index']);
        Route::post('/add', [CategoriesController::class, 'store'])->name('category.store');
    });
});
