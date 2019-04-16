<?php

use Illuminate\Database\Seeder;

class UserSeeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
            'name' => 'Samuel Owusu',
            'email' => 'sam@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        ]);

        \App\Buyer::create([
            'name' => 'Peter Ayambire',
            'email' => 'peter@gmail.com',
            'phone_number' => '0547576916',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),

        ]);

        \App\Category::create([
            'name' => 'Electronics',
        ]);

        \App\Category::create([
            'name' => 'Fashion',
        ]);

        \App\Category::create([
            'name' => 'Sports',
        ]);

        \App\Category::create([
            'name' => 'Motors',
        ]);

        \App\Category::create([
            'name' => 'Collectibles',
        ]);

        \App\Category::create([
            'name' => 'Home & Garden',
        ]);


    }
}
