<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Secure Link Admin',
                'email' => 'admin@securelink.com',
                'password' => '$2y$10$SpOCvsV4HKQKAO7SBC8rHOFLqGHqGpW/BDPQOnZNVRLvP5FiUjWIG', // securelink
                'city' => 'Pyinmana',
                'country' => 'Nay Pyi Taw',
                'phone' => '09662346544',
                'file' => 'uploads/images.jpg',
                'is_admin' => 1,
                'status' => 2 
            ]
        ];

        User::insert($users);
    }
}
