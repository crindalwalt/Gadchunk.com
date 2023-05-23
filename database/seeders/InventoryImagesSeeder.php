<?php

namespace Database\Seeders;

use App\Models\InventoryImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryImages::create([
            'product_id' => '1',
            'inventory_id' => '1',
            'product_image' => 'product-inven-1683120504171.png',
        ]);
        InventoryImages::create([
            'product_id' => '2',
            'inventory_id' => '2',
            'product_image' => 'product-inven-1683120504162.jpg',
        ]);
        InventoryImages::create([
            'product_id' => '3',
            'inventory_id' => '3',
            'product_image' => 'product-inven-1683120504102.jpg',
        ]);
        InventoryImages::create([
            'product_id' => '4',
            'inventory_id' => '4',
            'product_image' => 'product-inven-1679988959178.png',
        ]);
        InventoryImages::create([
            'product_id' => '5',
            'inventory_id' => '5',
            'product_image' => 'product-inven-1679988959178.png',
        ]);
    }
}
