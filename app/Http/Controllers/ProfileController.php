<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function wishlist() {
        return view('profile.wishlist');
    }

    public function mijnVerkoop() {
        return view('profile.mijn-verkoop');
    }
}