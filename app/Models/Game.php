<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'game_platforms');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_games');
    }

    public function userGames()
    {
        return $this->hasMany(UserGame::class);
    }



}