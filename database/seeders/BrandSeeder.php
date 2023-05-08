<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Audionic',
            'brand_icon' => 'brand-123',
        ]);
        Brand::create([
            'name' => 'Apple',
            'brand_icon' => 'brand-123',
        ]);
        Brand::create([
            'name' => 'Outfit',
            'brand_icon' => 'brand-123',
        ]);
        Brand::create([
            'name' => 'Acer',
            'brand_icon' => 'brand-123',
        ]);
        Brand::create([
            'name' => 'Dell',
            'brand_icon' => 'brand-123',
        ]);
    }
}
