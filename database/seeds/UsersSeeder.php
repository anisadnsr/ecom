<?php

use Illuminate\Database\Seeder;
use Fzaninotto\Faker;
use App\Models\User;

class UsersSeeder extends Seeder{

    public function run(){
        $user_2 = new User;
        $user_2->name = 'admin';
        $user_2->email = 'admin@ecom.app';
        $user_2->password = \Hash::make('admin1234');
        $user_2->admin=1;
        $user_2->save();

        $user_1 = new User;
        $user_1->name = 'user';
        $user_1->email = 'user@ecom.app';
        $user_1->password = \Hash::make('user1234');
        $user_1->admin = 0;
        $user_1->save();
    }
}

        