<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('log');
});

Route::get('/register', [UsersController::class, "showRegister"])->name("register");

Route::post('register', [UsersController::class, "register"]);

Route::get('/reset', function () {
    return view('res');
});

Route::get('/bonjour/{nom}', function () {
    return view('bonjour', [
        'prenom' => request('nom'),
    ]);
});
