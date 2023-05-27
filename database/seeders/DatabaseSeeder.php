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
             'name' => 'User Khan',
             'email' => 'user@mail.com',
             'phone' => '03041232233',
             'street' => 'abc street number',
             'city' => 'Bahawalpur',
             'province' => 'Punjab',
             'zip_code' => '61300',
             'country' => 'Pakistan',
             'userType' => 1
         ]);
         User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'admin1@mail.com',
            'phone' => '03041232233',
            'street' => 'abc street number',
            'city' => 'Bahawalpur',
            'province' => 'Punjab',
            'zip_code' => '61300',
            'country' => 'Pakistan',
            'userType' => 0
        ]);
        //  $this->call([
        //     // OrderSeeder::class,
        //     // OrderDetailSeeder::class,
        //     BrandSeeder::class,
        //     CategorySeeder::class,
        //     ProductSeeder::class,
        //     ProductInventorySeeder::class,
        //     InventoryImagesSeeder::class,
        //     ReviewsSeeder::class,
        //     CollectionSeeder::class

        //  ]);


    }

}