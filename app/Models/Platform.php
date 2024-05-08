<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = ['platform_naam'];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_platforms');
    }
}