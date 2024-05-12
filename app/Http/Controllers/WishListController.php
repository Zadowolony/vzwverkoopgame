<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\GameAvailableMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WishListController extends Controller
{
     // WISHLIST

     public function wishlist() {
        return view('profile.wishlist');
    }


     public function addToWishlist(Request $request, $gameId)
     {
        $user = Auth::user();
    $game = Game::findOrFail($gameId);

    // Voeg de game toe aan de wishlist van de gebruiker
    $user->wishlistGames()->attach($gameId);

    return back()->with('success', 'Game added to your wishlist!');
     }

     public function removeFromWishlist($gameId)
     {
        $user = Auth::user();
        $user->wishlistGames()->detach($gameId);

        return back()->with('success', 'Game removed from your wishlist!');
     }

}