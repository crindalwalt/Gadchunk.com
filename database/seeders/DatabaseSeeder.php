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

         ProductVariation::factory()->create([
            'variation' => 'color'
         ]);
         ProductVariation::factory()->create([
            'variation' => 'size'
         ]);
         ProductVariation::factory()->create([
            'variation' => 'material'
         ]);



         // Product Variation Options
         ProductOption::factory()->create([
             'ProductVariation_id'=> 1,
             'value' => 'blue'
         ]);
         ProductOption::factory()->create([
             'ProductVariation_id'=> 1,
             'value' => 'green'
         ]);
         ProductOption::factory()->create([
             'ProductVariation_id'=> 1,
             'value' => 'red'
         ]);

         ProductOption::factory()->create([
             'ProductVariation_id'=> 2,
             'value' => 'small'
         ]);
         ProductOption::factory()->create([
            'ProductVariation_id'=> 2,
            'value' => 'medium'
         ]);
         ProductOption::factory()->create([
            'ProductVariation_id'=> 2,
            'value' => 'large'
         ]);
         ProductOption::factory()->create([
            'ProductVariation_id'=> 2,
            'value' => 'extra-small'
         ]);
         ProductOption::factory()->create([
            'ProductVariation_id'=> 2,
            'value' => 'extra-large'
         ]);

        ProductOption::factory()->create([
            'ProductVariation_id'=> 3,
            'value' => 'soft'
        ]);
        ProductOption::factory()->create([
            'ProductVariation_id'=> 3,
            'value' => 'semi-soft'
        ]);
        ProductOption::factory()->create([
            'ProductVariation_id'=> 3,
            'value' => 'rigid'
        ]);


        Category::factory(5)->create();
    }
}
