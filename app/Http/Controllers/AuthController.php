<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(){

        if (Auth::check()) {
            return redirect()->route('profile');
        }
        return view('auth.login');
    }

    public function handleLogin(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)){
            return redirect()->intended(route('profile'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);

    }

    public function register() {
        return view('auth.register');

    }

    public function handleRegister(Request $request) {

        //Valideer het formulier

        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,filter,dns|unique:users,email',
            'profile_picture' => 'nullable|image|max:2048',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $path = null;
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->profile_picture =  $path;
        $user->save();

        //Als persoon succesvol geregistreerd is , komt een flash tekst.
        $request->session()->flash('succes', 'registreren is gelukt (later send email');

        return redirect()->route('home');

    }

    public function logout(){

        Auth::logout();
        return back();
    }
}
