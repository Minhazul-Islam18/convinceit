<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Database\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = UserFactory(User::class)->create([
        //     'name' => 'Minhazul Islam',
        //     'email' => 'minhaz019166@gmil.com',
        //     'password' =>  Hash::make('@convinceitadmin')
        // ]);
    }
}
