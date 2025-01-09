<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add(Request $request, $userId)
    {
        $authUser = Auth::user();
        $targetUser = User::findOrFail($userId);

    if ($authUser->id == $targetUser->id) {
        return redirect()->route('home')->with('message', 'You cannot send a friend request to yourself.');
    }

    $existingRequest = Wishlist::where('user_id', $authUser->id)
                                ->where('wishlist_user_id', $targetUser->id)
                                ->first();

    if (!$existingRequest) {
        Wishlist::create([
            'user_id' => $authUser->id,
            'wishlist_user_id' => $targetUser->id,
        ]);
    }

    return redirect()->route('home')->with('message', 'Friend request sent!');
    }

    public function showNotifications()
    {
        $authUser = Auth::user();
 
        $friendRequests = Wishlist::where('wishlist_user_id', $authUser->id)
            ->where('hidden', false)
            ->with('user')
            ->get();
 
        $incomingMessages = Chat::where('receiver_id', $authUser->id)
            ->where('read', false)
            ->with('sender')
            ->latest('created_at')
            ->get();

        $noNotifications = $friendRequests->isEmpty() && $incomingMessages->isEmpty();
    
        return view('notif', compact('friendRequests', 'incomingMessages', 'noNotifications'));
    }
    


public function removeNotification(Request $request, $wishlistId)
{
    $wishlist = Wishlist::findOrFail($wishlistId);

    if ($wishlist->wishlist_user_id == Auth::id()) {
        $wishlist->hidden = true;
        $wishlist->save();
    }

    return redirect()->back()->with('message', 'Notification removed!');
}

    
 

    public function startChat($friendId)
    {
        $authUser = Auth::user();
        $friend = User::findOrFail($friendId);

        Chat::where('sender_id', $friendId)
            ->where('receiver_id', $authUser->id)
            ->where('read', false)
            ->update(['read' => true]);
    
        $messages = Chat::where(function ($query) use ($authUser, $friend) {
                $query->where('sender_id', $authUser->id)
                      ->where('receiver_id', $friend->id);
            })
            ->orWhere(function ($query) use ($authUser, $friend) {
                $query->where('sender_id', $friend->id)
                      ->where('receiver_id', $authUser->id);
            })
            ->orderBy('created_at', 'asc')
            ->get();
    
        return view('chat', compact('friend', 'messages'));
    }
}    
