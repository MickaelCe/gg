<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SearchController extends Controller
{
    /**
     * Show the application register.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name = Route::currentRouteName();
        return view('search', compact('name'));
    }
}
