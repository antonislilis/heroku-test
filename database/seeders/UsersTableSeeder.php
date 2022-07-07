<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        \DB::table('users')->delete();

        $users = array(
            [
                'id' => 1,
                'name' => 'Admin',
                'password' => \Hash::make('12345678'),
                'email' => 'admin@admin.net',
            ],
            [
                'id' => 2,
                'name' => 'User',
                'password' => \Hash::make('12345678'),
                'email' => 'user@user.net',
            ],
        );

        // Uncomment the below to run the seeder
        \DB::table('users')->insert($users);
    }

}
