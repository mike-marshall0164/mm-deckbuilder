<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'LordSalem',
            'email'=> 'asdf@gmail.com',
            'password' => '123secret'
        ]);
       User::create([
           'username' => 'taylorotwell',
           'email'=> 'fakeemail@gmail.com',
           'password' => 'greatsecret'
       ]);
    }
}
