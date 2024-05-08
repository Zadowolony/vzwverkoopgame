<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerkoopController;

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

Route::get('/profile/wishlist', [ProfileController::class, 'wishlist'])->name('wishlist')->middleware('auth');
Route::get('/profile/mijn-verkoop', [ProfileController::class, 'mijnVerkoop'])->name('mijn-verkoop')->middleware('auth');

// Verander je gegevens

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update-profile')->middleware('auth');
Route::put('/profile/edit/email', [ProfileController::class, 'updateEmail'])->name('profile.update-email')->middleware('auth');
Route::put('/profile/edit/password', [ProfileController::class, 'updatePassword'])->name('profile.update-password')->middleware('auth');


// verkoop crud

Route::post('/verkopen', [VerkoopController::class, 'store'])->name('verkoop.store')->middleware('auth');
Route::get('/verkopen/create', [VerkoopController::class, 'create'])->name('verkoop.create')->middleware('auth');
Route::get('verkopen/{id}', [VerkoopController::class, 'show'])->name('verkoop.show')->middleware('auth');
Route::put('/verkopen/{id}', [VerkoopController::class, 'update'])->name('verkoop.update')->middleware('auth');
Route::delete('/verkopen/{id}', [VerkoopController::class, 'destroy'])->name('verkoop.destroy')->middleware('auth');
Route::get('/verkopen/{id}/edit', [VerkoopController::class, 'edit'])->name('verkoop.edit')->middleware('auth');

Route::get('/fetch-games/{id}', [VerkoopController::class, 'fetchGames']);


// show game id om te kopen
Route::get('/game/{id}', [GameController::class, 'show'])->name('game.show');

//admin spel toevoeg en event toevoegen


Route::get('admin/create-game', [AdminController::class, 'index'])->name('admin.create-game');
Route::post('admin/create-game', [AdminController::class, 'storeGame'])->name('admin.store-game');