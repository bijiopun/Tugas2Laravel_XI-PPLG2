<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

// Route::get('/index', function () {
//     return view('index'); //Meruju ke file welcome.blade.
// });

Route::get('/welcome', function () {
    return view('welcome'); //Meruju ke file welcome.blade
});

// Route::get('/about', function () {
//     return view('about'); //Meruju ke file welcome.blade
// });

// Route::get('/login', function () {
//     return view('login'); //Meruju ke file login.blade
// });

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');




