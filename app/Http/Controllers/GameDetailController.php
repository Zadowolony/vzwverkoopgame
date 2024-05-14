<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use App\Models\UserGame;
use Illuminate\Http\Request;

class GameDetailController extends Controller
{
    public function show($userId, $gameId,  ) {
        $userGame = UserGame::with(['game', 'buyer', 'seller'])
        ->where('id', $gameId)
        ->where('koper_id', $userId)
        ->firstOrFail();

return view('userGame.details', ['game' => $userGame]);
    }

    public function showSoldGame($userId, $gameId) {


        $userGame = UserGame::with(['game', 'buyer', 'seller'])
            ->where('game_id', $gameId)
            ->where('user_id', $userId)
            ->where('status', 'verkocht')
            ->firstOrFail();

        return view('userGame.soldGame', ['game' => $userGame]);
    }


}
