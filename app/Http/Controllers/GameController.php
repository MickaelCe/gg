<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $name = Route::currentRouteName();
        return view('show', compact('game','name'));
    }
}
