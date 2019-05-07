<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', '=', 'aliosha.shalabay@gmail.com')->first() === null) {

            $newUser = User::create([
                'name' => 'Aliosha',
                'email' => 'aliosha.shalabay@gmail.com',
                'password' => bcrypt('*9+\Zy/ZtD5`E3#y'),
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
            ]);

        }
    }
}
