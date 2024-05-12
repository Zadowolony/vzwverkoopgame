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
        return $this->hasMany(UserGame::class, 'game_id');
    }

    public function isOwnedByUser($userId)
    {
        // This checks if any associated user-game pair has the given user ID.
        return $this->userGames->any(function($ug) use ($userId) {
            return $ug->user_id === $userId;
        });
    }

    public function wishlistedByUsers()
    {
        return $this->belongsToMany(User::class, 'wishlist_items', 'wishlist', 'game_id', 'user_id');
    }






}