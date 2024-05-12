<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Game;
use App\Models\User;
use App\Models\UserGame;
use Illuminate\Http\Request;
use App\Mail\GameAvailableMail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function index(){
        // Zorg ervoor dat de gebruiker is ingelogd
        $userId = Auth::id();

        // Ophalen van alle spellen die de gebruiker verkoopt
        $sellingGames = UserGame::with('game', 'platform')
                                ->where('user_id', $userId)
                                ->where('status', 'te koop') // Zorg ervoor dat alleen spellen die nog te koop zijn, getoond worden
                                ->get();

        // Ophalen van alle spellen die de gebruiker gekocht heeft
        $purchasedGames = UserGame::with('game', 'platform')
                                  ->where('koper_id', $userId)
                                  ->where('status', 'verkocht') // Zorg ervoor dat alleen verkochte spellen getoond worden
                                  ->get();

        $soldGames = UserGame::with('game', 'platform')
                                  ->where('user_id', $userId)
                                  ->where('status', 'verkocht')
                                  ->get();

        $user = User::findOrFail($userId);
        $wishlistGames = $user->wishlistGames()->with('platforms')->get();


        // Zorg ervoor dat je data doorstuurt naar de view
        return view('profile.index', compact('sellingGames', 'purchasedGames', 'soldGames', 'wishlistGames'));
    }


    public function mijnVerkoop() {

        $userId = Auth::id(); // Verkrijg de ID van de ingelogde gebruiker

        // Ophalen van alle games verkocht door de ingelogde gebruiker
        $userGames = UserGame::with(['game.platforms', 'game'])
                            ->where('user_id', $userId)
                            ->get();

        return view('profile.mijn-verkoop', compact('userGames'));
    }

    public function edit(){
        return view('profile.edit');
    }

    public function update(Request $request){

        $user = $request->user();

        $request->validate([
            'name' => 'nullable|string|max:255',
            'over_mij' => 'nullable|string|max:5000',
            'profile_picture' => 'nullable|image|max:2048'
        ]);


        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('over_mij')) {
            $user->over_mij = $request->over_mij;
    }

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->route('profile');

    }

    public function updateEmail(Request $request){

        $user= $request->user();

        $request->validate([
            // 'email' => 'required|email|unique:users'
            'email' => [
                'required',
                'confirmed',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);


        $user->email = $request->email;
        $user->save();
        $request->session()->flash('success_email', 'Email successfully updated.');
        return redirect()->route('profile');

    }

    public function updatePassword(Request $request){

        $user = $request->user();
        $request->validate([
            'password' => [
                'required',
                'confirmed',
                Rule::unique('users')->ignore($user->id),

            ],
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('success_password', 'Password successfully updated.');
        return redirect()->route('profile');

    }



}