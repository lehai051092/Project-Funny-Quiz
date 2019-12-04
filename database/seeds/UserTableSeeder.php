<?php

use App\RoleInterface;
use App\User;
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
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('1');
        $user->role = RoleInterface::ADMIN;
        $user->save();

        $user = new User();
        $user->name = 'guest';
        $user->email = 'guest@gmail.com';
        $user->password = Hash::make('1');
        $user->role = RoleInterface::GUEST;
        $user->save();

    }
}
