<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Wishlist;

class ProfileController extends Controller
{
    public function show()
    {
        $authUser = Auth::user();
        $purchasedAvatars = $authUser->transactions()->with('avatar')->get()->pluck('avatar');
    
        if (!$authUser) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }


        $mutualFriends = User::whereIn('id', function ($query) use ($authUser) {
            $query->select('wishlist_user_id')
                ->from('wishlists')
                ->where('user_id', $authUser->id)
                ->whereIn('wishlist_user_id', function ($subQuery) use ($authUser) {
                    $subQuery->select('user_id')
                        ->from('wishlists')
                        ->where('wishlist_user_id', $authUser->id);
                });
        })->get();

        return view('profile.show', compact('authUser', 'mutualFriends', 'purchasedAvatars'));
    }

    public function update(Request $request)
    {
        $authUser = Auth::user();

        $request->validate([
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('up/profile_photos'), $filename);
            $authUser->profile_photo = $filename;
        }

        $authUser->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }

    public function remove($friendId)
    {
    
        $authUserId = Auth::id();
        if (!$authUserId) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this action.');
        }
        
        Log::info('Deleting from wishlist where user_id=' . $authUserId . ' and wishlist_user_id=' . $friendId);
    
        Wishlist::where('user_id', $authUserId)->where('wishlist_user_id', $friendId)->delete();
        Wishlist::where('user_id', $friendId)->where('wishlist_user_id', $authUserId)->delete();
    
        return redirect()->route('profile.show')->with('message', 'Friend removed successfully.');
    }
    
    public function updateAvatar(Request $request)
    {
        
        $request->validate([
            'avatar_id' => 'required|exists:avatars,id', // Validasi ID avatar
        ]);
    
        $user = Auth::user();
        $user->avatar_id = $request->avatar_id;

        if ($request->has('replace_photo') && $request->replace_photo) {
            $user->profile_photo = null;
        }
        $user->save();
        return redirect()->route('profile.show')->with('success', 'Avatar updated successfully!');
    }
    
    

}
