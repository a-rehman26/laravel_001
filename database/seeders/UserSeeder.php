<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path = database_path('json/Users.json');
        $users = json_decode(file_get_contents($path), true);

        foreach ($users as $user) {
            User::create([
                'u_name' => $user['u_name'],
                'u_age' => $user['u_age'],
                'u_email' => $user['u_email'],
                'u_address' => $user['u_address'],
            ]);
        }
    }
}
