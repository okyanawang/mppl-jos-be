<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::factory()->create([
            'username' => 'benedictusbimo',
            'first_name' => 'benedictus',
            'last_name' => 'bimo',
            'email' => 'benedictusbimo@gmail.com',
            'password' => Hash::make('titusganteng')
        ]);

        Food::factory()->create([
            'name' => 'nasi goreng',
            'price' => '10000',
            'qty' => '1',
            'desc_a' => 'nasi goreng a',
            'desc_b' => 'nasi goreng b',
            'cal' => '350',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308695/069244600_1585909700-fried-2509089_1920_nprxik.jpg',
            'url_vid' => 'link video'
        ]);

        Food::factory()->create([
            'name' => 'Sate Jamur',
            'price' => '15000',
            'qty' => '100',
            'desc_a' => 'Sate Jamur A',
            'desc_b' => 'Sate Jamur B',
            'cal' => '200',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308937/download_2_p665dv.jpg',
            'url_vid' => 'link video'
        ]);
    }
}
