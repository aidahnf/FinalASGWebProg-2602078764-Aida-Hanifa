<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlists';
    protected $fillable = ['user_id', 'wishlist_user_id'];

    // Relasi ke user yang mengirim permintaan
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke wishlist dari arah berlawanan (untuk memeriksa hubungan mutual)
    public function reverseWishlist()
    {
        return $this->hasOne(Wishlist::class, 'wishlist_user_id', 'user_id');
    }
    
    
}


