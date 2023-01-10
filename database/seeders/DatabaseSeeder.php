<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(10)->create();
        // \App\Models\User::factory(10)->create();
         \App\Models\User::factory()->create([
             'name' => 'Shahzad Farooq',
             'email' => 'shahzad@mail.com',
             'phone' => '03041232233',
             'userType' => 0,

         ]);


        Category::factory(5)->create();
    }
}
