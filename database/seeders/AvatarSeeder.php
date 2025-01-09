<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Avatar;
use Faker\Factory as Faker;

class AvatarSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Avatar::create([
                'image_url' => $faker->imageUrl(150, 150, 'avatar', true, 'Avatar' . $index),
                'price' => $faker->randomElement([50, 100, 500, 1000, 5000, 10000, 50000, 100000]),
            ]);
        }
    }
}
