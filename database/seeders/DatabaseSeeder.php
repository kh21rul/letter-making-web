<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domisili;
use App\Models\Usaha;
use App\Models\User;

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

        User::create([
            'name' => 'Khairul Aqram',
            'username' => 'khairulaqram',
            'email' => 'khairulaqram21@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(10)->create();

        Domisili::factory(10)->create();
        Usaha::factory(10)->create();
    }
}
