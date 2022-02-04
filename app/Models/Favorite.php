<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Favorite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'favorites';

    protected $fillable = [
        'steam_game_id',
        'user_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function game()
    {
        return $this->hasMany(Game::class);
    }
}
