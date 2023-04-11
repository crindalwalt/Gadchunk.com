<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductVariation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
//    Seeding the application data
    public function run()
    { 
    //    Product::factory(10)->create();
        // \App\Models\User::factory(10)->create();
         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'shahzad@mail.com',
             'phone' => '03041232233',
             'userType' => 0,
         ]);
         \App\Models\User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'shezi@mail.com',
            'phone' => '03041232233',
            'userType' => 1,
        ]);
        //  $this->call([
        //     OrderSeeder::class,
        //     OrderDetailSeeder::class,
        //  ]);


    }

}
