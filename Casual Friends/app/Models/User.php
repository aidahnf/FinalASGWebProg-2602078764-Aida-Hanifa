<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'profile_picture',
        'email',
        'password',
        'gender',
        'instagram',
        'mobile',
        'hobbies',
        'age', 
        'friendship_intent',
        'registration_fee',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function reverseWishlist()
    {
        return $this->hasMany(Wishlist::class, 'wishlist_user_id', 'id');
    }

    public function unreadNotificationsCount()
    {
        return Wishlist::where('wishlist_user_id', $this->id)
            ->whereDoesntHave('reverseWishlist', function ($query) {
                $query->where('user_id', $this->id);
            })
            ->count();
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function avatar()
    {
        return $this->belongsTo(Avatar::class, 'avatar_id');
    }

}
