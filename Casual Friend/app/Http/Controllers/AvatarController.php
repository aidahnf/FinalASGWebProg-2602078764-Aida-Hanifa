<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    public function index()
    {
        $avatars = Avatar::all();
        return view('avatars.index', compact('avatars'));
    }

    public function buy(Request $request)
    {
        $avatar = Avatar::find($request->avatar_id);
        $user = Auth::user();

        if ($user->coins < $avatar->price) {
            return redirect()->back()->with('error', 'You do not have enough coins.');
        }

        $user->coins -= $avatar->price;
        $user->save();

        Transaction::create([
            'user_id' => $user->id,
            'avatar_id' => $avatar->id,
            'amount' => $avatar->price,
        ]);

        return redirect()->route('profile.show')->with('success', 'Avatar purchased successfully.');
    }
}
