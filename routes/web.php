<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;


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



//Paginas

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/games', [GameController::class, 'games'])->name('games');
Route::get('/events', [EventsController::class, 'events'])->name('events');


//Registreer , Login , Logout

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post')->middleware('guest');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register.post')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


//Als je logged in bent

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');




// Als je ingelogd bent de gewone paginas

Route::get('/profile/wishlist', [ProfileController::class, 'wishlist'])->name('wishlist')->middleware('auth');;
Route::get('/profile/mijn-verkoop', [ProfileController::class, 'mijnVerkoop'])->name('mijn-verkoop')->middleware('auth');;