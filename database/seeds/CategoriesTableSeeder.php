<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
