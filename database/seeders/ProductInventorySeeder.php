<?php

namespace Database\Seeders;

use App\Models\ProductInventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductInventory::create([
            'retail_price' => '100',
            'discount_price' => '10%',
            'stock' => '100',
            'product_id' => '1',
            'in_stock' => 'yes',
            'is_active' => 'on',
            'on_sale' => 'yes',
            'is_featured' => 'no'
        ]);
        ProductInventory::create([
            'retail_price' => '200',
            'discount_price' => '20%',
            'stock' => '100',
            'product_id' => '2',
            'in_stock' => 'yes',
            'is_active' => 'on',
            'on_sale' => 'no',
            'is_featured' => 'yes'
        ]);
        ProductInventory::create([
            'retail_price' => '400',
            'discount_price' => '40%',
            'stock' => '100',
            'product_id' => '3',
            'in_stock' => 'yes',
            'is_active' => 'on',
            'on_sale' => 'yes',
            'is_featured' => 'no'
        ]);
        ProductInventory::create([
            'retail_price' => '600',
            'discount_price' => '50%',
            'stock' => '100',
            'product_id' => '4',
            'in_stock' => 'yes',
            'is_active' => 'on',
            'on_sale' => 'no',
            'is_featured' => 'yes'
        ]);
        ProductInventory::create([
            'retail_price' => '800',
            'discount_price' => '50%',
            'stock' => '100',
            'product_id' => '5',
            'in_stock' => 'yes',
            'is_active' => 'on',
            'on_sale' => 'yes',
            'is_featured' => 'no'
        ]);
    }
}
