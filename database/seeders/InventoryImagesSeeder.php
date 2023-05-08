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
            'product_image' => 'https://media.npr.org/assets/img/2022/11/22/ap22298283107973-f8640b908dc0eb08f261fcab4bec95d365cc3c95.jpg',
        ]);
        InventoryImages::create([
            'product_id' => '2',
            'inventory_id' => '2',
            'product_image' => 'https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/01/02232228/BSc-Electronics.png',
        ]);
        InventoryImages::create([
            'product_id' => '3',
            'inventory_id' => '3',
            'product_image' => 'https://neemopani.com/wp-content/uploads/2022/03/Return_of_Sports.jpg',
        ]);
        InventoryImages::create([
            'product_id' => '4',
            'inventory_id' => '4',
            'product_image' => 'https://assets.bizclikmedia.net/1336/d675f976d7928ca21831e5521b269885:153e3573aee52b14472a523ce0e11a04/gettyimages-1301959047-0-jpg.webp',
        ]);
        InventoryImages::create([
            'product_id' => '5',
            'inventory_id' => '5',
            'product_image' => 'https://housing.com/news/wp-content/uploads/2022/11/living-room-furniture-design-compressed-1.jpg',
        ]);
    }
}
