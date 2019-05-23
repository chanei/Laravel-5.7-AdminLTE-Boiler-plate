<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'John Rogers';
        $user->phone_number = '25670000000';
        $user->email = 'lukwatajohn@coredevsug.com';
        $user->username = 'janta';
        $user->password = bcrypt('janta');
        $user->save();

    }
}
