<?php

use Illuminate\Support\Facades\Route;

/**
 * @Route welcome route
 */

Route::get('/', function () {
    return view('welcome');
});
