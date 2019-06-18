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
        $user = User::where('email', 'karimen@mail.com')->first();

        if(!$user) {
        User::create([
            'name' => 'karimen',
            'email' => 'karimen@mail.com',
            'role' => 'admin',
            'password' => Hash::make('password')
            ]);
      }
    }
}
