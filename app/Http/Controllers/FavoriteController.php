<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route, Auth};

class FavoriteController extends Controller
{
    public function index()
    {
        $auth = auth()->user();
        $userfavorites = Favorite::where('user_id', $auth->id)->get();
        $name = Route::currentRouteName();

        return view('favorite', compact('userfavorites','name'));
    }


    public function favorites()
    {
        return Favorite::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $auth = Auth::user();

        if(empty($auth)){
            abort(404);
        }
        

        // $favorite = Favorite::create([
        //     'user_id' => $auth->id,
        //     'steam_game_id' => $request->steam_game_id
        // ]);

        auth()->user()->favorites()->attach($request->steam_game_id);

        $userfavorites = Favorite::where('user_id', $auth->id)->get();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $auth = Auth::user();

        if(empty($auth)){
            abort(404);
        }

        // $userfavorites = Favorite::where('user_id', $auth->id)->where('steam_game_id', $request->steam_game_id)->first();

        auth()->user()->favorites()->detach($request->steam_game_id);

        return redirect()->back();

    }
}
