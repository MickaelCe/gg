<?php

namespace App\Http\Controllers;

use App\Models\{Game, Favorite};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route, Auth};

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }
    public function random()
    {
        return Game::inRandomOrder()->get();
    }
    public function show($id)
    {
        $game = Game::where('id', $id)->first();
        $gamerandomsleft = Game::inRandomOrder()->limit(2)->get();
        $gamerandomsright = Game::inRandomOrder()->limit(2)->get();
        $name = Route::currentRouteName();

        $auth = Auth::user();
        $userfavorites = Favorite::where('user_id', $auth->id)->where('steam_game_id', $id)->first();

        return view('show', compact('game','name', 'gamerandomsleft', 'gamerandomsright', 'userfavorites'));
    }

}
