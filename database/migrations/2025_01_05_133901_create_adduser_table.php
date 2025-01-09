<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_photo')->nullable();
            $table->string('gender')->nullable(); 
            $table->string('instagram')->nullable();
            $table->string('mobile')->nullable(); 
            $table->json('hobbies')->nullable(); 
            $table->integer('age')->nullable(); 
            $table->enum('friendship_intent', ['casual_friendships', 'relationships', 'business_networking'])->nullable();
            $table->integer('registration_fee')->default(0); 
            $table->decimal('wallet_balance', 10, 2)->default(0); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_photo');
            $table->dropColumn(['gender', 'instagram', 'mobile', 'hobbies', 'registration_fee','age']);
            $table->dropColumn('friendship_intent'); 
            $table->dropColumn('wallet_balance');
        });
    }
};
