<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        if(!User::where('email','ahmed@ahmed.ps')->first()) {
            $user = User::create([
                'name' => 'Ahmed Ash',
                'email' => 'ahmed@ahmed.ps',
                'mobile' => '0597288192',
                'password' => Hash::make("ahmed@ahmed.ps"),
                'status' => 1,
            ]);

            $user->assignRole('User');

        }

    }
}
