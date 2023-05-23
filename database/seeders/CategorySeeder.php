<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Grocery',
            'slug' => '/grocery',
            'icon' => 'cat-icon1684786140136.jpg',
            'is_active' => 1
        ]);
        Category::create([
            'name' => 'Electronics',
            'slug' => '/electronics',
            'icon' => 'cat-icon1684786140136.jpg',
            'is_active' => 1
        ]);
        Category::create([
            'name' => 'Sports',
            'slug' => '/sports',
            'icon' => 'cat-icon1684786140136.jpg',
            'is_active' => 1
        ]);
        Category::create([
            'name' => 'Home Appliances',
            'slug' => '/appliances',
            'icon' => 'cat-icon1684786140136.jpg',
            'is_active' => 1
        ]);
        Category::create([
            'name' => 'Healthy & Beauty',
            'slug' => '/healthy',
            'icon' => 'cat-icon1684786140136.jpg',
            'is_active' => 1
        ]);
    }
}
