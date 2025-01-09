<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AvatarController;

Auth::routes(); 

Route::get('/', [HomeController::class, 'index'])->name('home');

// fitur pembayaran
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store'); 
Route::post('/payment/add-to-wallet', [PaymentController::class, 'addToWallet'])->name('payment.addToWallet'); 
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success'); 


Route::middleware(['auth'])->group(function () {
    // Profil 
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show'); 
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); 
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update.avatar'); 
    Route::delete('/profile/remove/{friendId}', [ProfileController::class, 'remove'])->name('profile.remove'); 

    // Chat
    Route::get('chat/{friendId}', [ChatController::class, 'show'])->name('chat.show'); 
    Route::post('chat/{friendId}/send', [ChatController::class, 'send'])->name('chat.send'); 
    Route::get('/chat/start/{friendId}', [WishlistController::class, 'startChat'])->name('chat.start'); 

    // Notif
    Route::get('/notif', [WishlistController::class, 'showNotifications'])->name('notif');

    // Friends
    Route::post('/wishlist/{user}', [WishlistController::class, 'add'])->name('wishlist.add'); 
    Route::post('/wishlist/add/{userId}', [WishlistController::class, 'add'])->name('wishlist.add'); 
    Route::patch('/wishlist/remove/{wishlistId}', [WishlistController::class, 'removeNotification'])->name('wishlist.remove'); 
    Route::post('/wishlist/accept/{wishlistId}', [WishlistController::class, 'acceptFriendRequest'])->name('wishlist.accept'); 
  
    // Avatar
    Route::get('/avatars', [AvatarController::class, 'index'])->name('avatars.index'); 
    Route::post('/avatars/buy', [AvatarController::class, 'buy'])->name('avatars.buy'); 
});

// Localization
Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back(); 
})->name('set-locale');
