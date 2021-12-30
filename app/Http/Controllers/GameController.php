<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;


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

        return view('show', compact('game'));
    }
}
