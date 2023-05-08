<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductVariation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
//    Seeding the application data
    public function run()
    { 
         User::factory()->create([
             'name' => 'User',
             'email' => 'shahzad@mail.com',
             'phone' => '03041232233',
             'userType' => 0,
         ]);
         User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'shezi@mail.com',
            'phone' => '03041232233',
            'userType' => 1,
        ]);
         $this->call([
            // OrderSeeder::class,
            // OrderDetailSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductInventorySeeder::class,
            InventoryImagesSeeder::class,
            ReviewsSeeder::class,
            CollectionSeeder::class

         ]);


    }

}
