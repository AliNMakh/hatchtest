<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'admin Admin',
        'email' => 'admin@admin.com',
        'type' => '1',
        'password' => bcrypt('12345678')]);
        User::create(['name' => 'user user',
        'email' => 'user@user.com',
        'type' => '0',
        'password' => bcrypt('00000000')]);
   
        

    }
    }
