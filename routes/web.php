<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('registration');
});

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('registration', [RegistrationController::class, 'index']);

Route::post('/registration', [RegistrationController::class,'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return "Helo Zayan";
});