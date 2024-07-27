<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])->name('register.submit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/about', function () {
    return view('about');
});

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment.show');

Route::get('/adopt', function () {
    return view('adopt');
})->name('adopt.show');

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/dbconn', function () {
    return view('dbconn');
})->name('dbconn.show');

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/contact', function () {
    return view('contact');
});


