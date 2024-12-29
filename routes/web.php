<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');


});

Route::prefix('post')->group(function () {
    Route::get('admin', function () {
        return view('post');
    });

    Route::get('user', function () {
        return "<h1>i am user</h1>";
    });

    Route::get('teamlead', function () {
        return "<h1>i am teamlead</h1>";
    });

});



