<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;
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
    }
}
