<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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

        // if(Auth::attempt($validated)){
        //     return redirect()->intended(route('profile'));
        // }

        if(Auth::attempt($validated)){
            if (!Auth::user()->hasVerifiedEmail()) {
                return redirect()->route('verification.notice');
            }
            return redirect()->route('profile');
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
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ],
            'password_confirmation' => 'required'
        ], [
            'password.min' => 'Het wachtwoord moet minimaal 8 tekens lang zijn.',
            'password.regex' => 'Het wachtwoord moet minstens één kleine letter, één hoofdletter, één cijfer en één speciaal teken bevatten.',
            'password.confirmed' => 'De wachtwoordbevestiging komt niet overeen.'
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

        // email versturen met verificatie
        event(new Registered($user));
        $user->sendEmailVerificationNotification();

        //Als persoon succesvol geregistreerd is , komt een flash tekst.
        $request->session()->flash('succes', 'registreren is gelukt (later send email');

        return redirect()->route('home');

    }

    public function logout(){

        Auth::logout();
        return back();
    }
}
