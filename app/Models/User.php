<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'over_mij',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'user_games');
    }

    public function salesAsSeller()
    {
        return $this->hasMany(Sell::class, 'user_id');
    }

    public function purchasesAsBuyer()
    {
        return $this->hasMany(Sell::class, 'koper_id');
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function wishlistGames()
    {
        return $this->belongsToMany(Game::class, 'wishlist_items', 'user_id', 'game_id')->withTimestamps();
    }
}