<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $authUserId = Auth::id();
        $search = $request->input('search');
        $gender = $request->input('gender');
        $hobby = $request->input('hobby');  
    
        $users = User::where('id', '!=', $authUserId)
            ->when($search, function ($query, $search) {
                $query->whereRaw('LOWER(hobbies) LIKE ?', ['%' . strtolower($search) . '%']);
            })
            ->when($gender, function ($query, $gender) {
                $query->where('gender', '=', $gender); 
            })
            ->when($hobby, function ($query, $hobby) {
                $query->whereRaw('LOWER(hobbies) LIKE ?', ['%' . strtolower($hobby) . '%']); 
            })
            ->get();
    
        foreach ($users as $user) {
            // Ngecek udah saling berteman
            $isMutual = Wishlist::where('user_id', $authUserId)
                ->where('wishlist_user_id', $user->id)
                ->exists() &&
                Wishlist::where('user_id', $user->id)
                ->where('wishlist_user_id', $authUserId)
                ->exists();
    
            // Nentuin statusnya
            $user->isMutual = $isMutual;
            $user->isFollowing = !$isMutual && Wishlist::where('user_id', $authUserId)
                ->where('wishlist_user_id', $user->id)
                ->exists();
        }
    
        return view('home', compact('users', 'search', 'gender', 'hobby'));
    }
    

    public function searchByFieldOfWork(Request $request)
    {
        $search = $request->input('search');

        $users = User::select('id', 'name', 'profile_picture', 'profession', 'hobbies')
                    ->whereRaw('LOWER(hobbies) LIKE ?', ['%' . strtolower($search) . '%']) 
                    ->get();

        return view('search.result', compact('users', 'search'));
    }

    public function filterByGender()
    {
        $users = User::select('id', 'name', 'gender', 'profile_picture', 'profession', 'hobbies')->get();

        return view('filter.gender', compact('users'));
    }
    

    

}
