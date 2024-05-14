<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function buyer() {
        return $this->belongsTo(User::class, 'koper_id');
    }

    public function seller()
    {
        // Hier neem ik aan dat er een `user_id` veld is dat de verkoper aanduidt
        return $this->belongsTo(User::class, 'user_id');
    }




}
