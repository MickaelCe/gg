<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'steam_game';

    //User

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'steam_game_id', 'user_id');
    }
}
