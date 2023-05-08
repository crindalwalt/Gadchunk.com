<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'First Product',
            'slug' => '/first',
            'brand_id' => '1',
            'category_id' => '1',
            'featured_image' => 'image',
            'description' => 'lorem ipsum first description',
            'is_active' => 1
        ]);
        Product::create([
            'name' => 'Second Product',
            'slug' => '/Second',
            'brand_id' => '2',
            'category_id' => '2',
            'featured_image' => 'image',
            'description' => 'lorem ipsum Second description',
            'is_active' => 1
        ]);
        Product::create([
            'name' => 'Third Product',
            'slug' => '/Third',
            'brand_id' => '3',
            'category_id' => '3',
            'featured_image' => 'image',
            'description' => 'lorem ipsum Third description',
            'is_active' => 1
        ]);
        Product::create([
            'name' => 'Fourth Product',
            'slug' => '/Fourth',
            'brand_id' => '4',
            'category_id' => '4',
            'featured_image' => 'image',
            'description' => 'lorem ipsum Fourth description',
            'is_active' => 1
        ]);
        Product::create([
            'name' => 'Fifth Product',
            'slug' => '/Fifth',
            'brand_id' => '5',
            'category_id' => '5',
            'featured_image' => 'image',
            'description' => 'lorem ipsum Fifth description',
            'is_active' => 1
        ]);
    }
}
