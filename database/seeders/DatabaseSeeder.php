<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Minhazul Islam',
            'email' => 'minhaz019166@gmail.com',
            'password' => Hash::make('@convinceitadmin'),
        ]);
        // \App\Models\User::factory(10)->create();
        // $this->call(UserTableSeeder::class);
    }
}
