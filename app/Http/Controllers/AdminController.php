<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Platform;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.create-game');
    }

    public function storeGame(Request $request) {

        $request->validate([
            'titel' => 'required|max:255',
            'foto' => 'required|image|max:2048',
            'beschrijving' => 'nullable',
            'platform_naam' => 'required',

        ]);

        $game = new Game();
        $game->titel = $request->titel;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/games');
            $game->foto = str_replace('public/', '', $path);
        }
        $game->save();

        $platform = Platform::firstOrCreate(['platform_naam' => $request->platform_naam]);

         // Koppelen van game naar een platform
         $game->platforms()->attach($platform->id);

         return redirect()->route('profile')->with('success', 'Spel succesvol opgeslagen!');

    }
}