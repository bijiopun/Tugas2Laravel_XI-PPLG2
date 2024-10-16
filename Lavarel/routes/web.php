<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index'); //Meruju ke file welcome.blade.
});

Route::get('/welcome', function () {
    return view('welcome'); //Meruju ke file welcome.blade.
});

Route::get('/', function () {
    return view('login'); //Meruju ke file welcome.blade.
});


