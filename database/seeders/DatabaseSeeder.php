<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
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
       User::factory(10)->create();
       User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('test')
       ]);

       Schedule::factory(10)->create();
    }
}
