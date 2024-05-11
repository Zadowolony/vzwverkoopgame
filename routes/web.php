<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerkoopController;
use App\Http\Controllers\WishListController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('verified');


//Als je logged in bent

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('verified');;


// Als je ingelogd bent de gewone paginas

Route::get('/profile/mijn-verkoop', [ProfileController::class, 'mijnVerkoop'])->name('mijn-verkoop')->middleware('verified');



// Verander je gegevens

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('verified');
Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update-profile')->middleware('verified');
Route::put('/profile/edit/email', [ProfileController::class, 'updateEmail'])->name('profile.update-email')->middleware('verified');
Route::put('/profile/edit/password', [ProfileController::class, 'updatePassword'])->name('profile.update-password')->middleware('verified');


// verkoop crud

Route::post('/verkopen', [VerkoopController::class, 'store'])->name('verkoop.store')->middleware('verified');
Route::get('/verkopen/create', [VerkoopController::class, 'create'])->name('verkoop.create')->middleware('verified');
Route::get('verkopen/{id}', [VerkoopController::class, 'show'])->name('verkoop.show');
Route::put('/verkopen/{id}', [VerkoopController::class, 'update'])->name('verkoop.update')->middleware('verified');
Route::get('/verkopen/{id}/delete', [VerkoopController::class, 'delete'])->name('verkoop.delete')->middleware('verified');
Route::delete('/verkopen/{id}', [VerkoopController::class, 'destroy'])->name('verkoop.destroy')->middleware('verified');
Route::get('/verkopen/{id}/edit', [VerkoopController::class, 'edit'])->name('verkoop.edit')->middleware('verified');

// Click op button word de status verkocht

Route::post('/verkopen/buy/{id}', [VerkoopController::class, 'buy'])->name('verkoop.buy')->middleware('verified');


Route::get('/fetch-games/{id}', [VerkoopController::class, 'fetchGames']);


// show game id om te kopen
Route::get('/game/{id}', [GameController::class, 'show'])->name('game.show');

//admin spel toevoeg en event toevoegen


Route::get('admin/create-game', [AdminController::class, 'index'])->name('admin.create-game');
Route::post('admin/create-game', [AdminController::class, 'storeGame'])->name('admin.store-game');

//Wishlist


Route::get('/profile/wishlist', [WishListController::class, 'wishlist'])->name('wishlist')->middleware('verified');
Route::post('/profile/add-to-wishlist/{gameId}', [WishListController::class, 'addToWishlist'])->name('wishlist.add')->middleware('verified');
Route::delete('/profile/wishlist/{gameId}/remove', [WishListController::class, 'removeFromWishlist'])->name('wishlist.remove')->middleware('verified');



// email verificatie



// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');