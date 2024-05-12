<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\GameAvailableMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class GameController extends Controller
{
    public function games(Request $request){


        $category = $request->input('category');

        $search = $request->input('search');

        $games = Game::with(['platforms', 'userGames' => function ($query) {
            $query->join('users', 'user_games.user_id', '=', 'users.id')
                  ->select('user_games.*', 'users.name as user_name')
                  ->orderBy('prijs', 'asc')
                  ->limit(3);
        }])
        ->when($category, function ($query, $category) {
            return $query->whereHas('platforms', function ($q) use ($category) {
                $q->where('platform_naam', $category);
            });
        })
        // Zoek op titel of aanpassen naar wens
        ->when($search, function ($query, $search) {
            return $query->where('titel', 'like', '%' . $search . '%');
        })

        ->get();

        return view('games', [
            'games' => $games,
            'selectedCategory' => $category,
            'search' => $search
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