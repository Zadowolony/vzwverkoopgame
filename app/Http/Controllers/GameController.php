<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function games(Request $request){


        $category = $request->input('category');

        $games = Game::with('userGames.user', 'platforms')
                     ->when($category, function ($query, $category) {

                         return $query->whereHas('platforms', function ($q) use ($category) {
                             $q->where('platform_naam', $category);
                         });
                        })->get();

        return view('games', [
            'games' => $games,
            'selectedCategory' => $category
        ]);

    }

    public function show($id){

        $game = Game::with(['userGames.user', 'platforms'])->findOrFail($id);


        $user = Auth::user();
        $userGames = $game->userGames;
        return view('game.show', [
            'game' => $game,
            'user' => $user,
            'userGames' => $userGames,


        ]);
    }
}