<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Platform;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class VerkoopController extends Controller
{





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('verkoop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // moet zowel een enkel game opslaan als verkoop game opslaan
         $request->validate([

            'game_id' => 'required|exists:games,id',
            'beschrijving' => 'required',
            'platform_naam' =>'required',
            'conditie' => 'required',
            'prijs' => 'required|numeric',
            'Status' => 'required|in:te koop,verkocht,niet te koop',
        ]);

        // Vind de bestaande game gebaseerd op de ingevoerde ID
        $game = Game::findOrFail($request->game_id);

            // Maak en sla een nieuwe UserGame instantie op
        $userGame = new UserGame();
        $userGame->user_id = auth()->id();
        $userGame->game_id = $game->id;
        $userGame->platform_id = $game->platforms()->first()->id; // Aannemende dat elk spel aan minstens één platform gekoppeld is
        $userGame->koper_id = null;
        $userGame->status = $request->Status;
        $userGame->conditie = $request->conditie;
        $userGame->beschrijving = $request->beschrijving; // Bewaar de beschrijving bij de verkoopinformatie
        $userGame->prijs = $request->prijs;
        $userGame->verkoopdatum = now();

        $userGame->save();

         return redirect()->route('profile')->with('success', 'Spel succesvol opgeslagen!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {


        $game = Game::with(['userGames', 'platforms'])->findOrFail($id);
        return view('verkoop.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
        return view('verkoop.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //hetzelfde benadering als store
        $request->validate([

            'beschrijving' => 'nullable',
            'conditie' => 'required',
            'prijs' => 'required|numeric'
        ]);

        $game = Game::findOrFail($id);
        // $game->titel = $request->titel;
        // $game->beschrijving = $request->beschrijving;


        // $game->save();

        // // Je zou kunnen checken of het platform is gewijzigd en zo ja, het bijwerken.
        // $platform = Platform::firstOrCreate(['platform_naam' => $request->platform_naam]);
        // // Gebruik sync om de relatie te herstellen.
        // $game->platforms()->sync([$platform->id]);

        $userGame = UserGame::where('game_id', $game->id)->first(); // Aannemend dat er maar één is per game.
        if ($userGame) {
            $userGame->conditie = $request->conditie;
            $userGame->prijs = $request->prijs;
            $userGame->save();
        }

        return redirect()->route('profile')->with('success', 'Spel succesvol bijgewerkt!');

    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete($id){
        $game = Game::findOrFail($id);
        return view('verkoop.delete', [
            'game' => $game
        ]);
     }

    public function destroy(string $id)
    {
        //Hier moet ik niet enkel game delete maar ook de andere tabellen.

        $game = Game::findOrFail($id);

        // Verwijder de geassocieerde userGame
        $game->userGames()->delete();

        // Moet van platform weg zijn
        $game->platforms()->detach();

        // Verwijder het spel uit het game
        $game->delete();

        return redirect()->route('profile')->with('success', 'Spel succesvol verwijderd!');
    }

    public function fetchGames($id)
    {
        Log::info("Fetching games for platform ID: " . $id);
        $platform = Platform::find($id);
        if (!$platform) {
            Log::error("No platform found for ID: " . $id);
            return response()->json(['error' => 'Platform not found'], 404);
        }
        $games = $platform->games()->get();
        Log::info("Games found: " . $games->count());
        return response()->json($games);
    }


    public function buy($id)
{
    $userGame = UserGame::findOrFail($id);
    if ($userGame->status === 'te koop') {
        $userGame->status = 'verkocht';
        $userGame->koper_id = auth()->id(); // Zet de huidige gebruiker als koper
        $userGame->verkoopdatum = now(); // Stel de huidige datum in als verkoopdatum
        $userGame->save();

        return redirect()->route('profile')->with('success', 'Je hebt het spel succesvol gekocht!');
    }

    return back()->with('error', 'Dit spel is niet beschikbaar voor verkoop.');
}


}