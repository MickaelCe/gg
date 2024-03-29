<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{
    public function show()
    {
        $name = Route::currentRouteName();
        return view('auth.profile', compact('name'));
    }

    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        $request->validate([
            'img_prfl' => 'required'
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'img_prfl' => $request->file('img_prfl')->storeAs('images',$request->img_prfl->getClientOriginalName(),'public'),
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }
}
