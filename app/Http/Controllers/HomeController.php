<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Request $request) {

        //serach inputveld
        $search = $request->input('search');


        $games = Game::with('userGames.user', 'platforms')
        ->inRandomOrder()
        ->take(4)
        ->get();


        return view('home', [
            'games' => $games,
            'search' => $search
        ]);
    }


}