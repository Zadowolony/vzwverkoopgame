<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index() {


        $totalDonations = UserGame::where('status', 'verkocht')
                            ->sum('prijs') * 0.60;

        return view('donate.index', ['totalDonations' => $totalDonations]);
    }
}