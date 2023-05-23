<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'name' => 'First',
            'slug' => ' first',
            'title' => 'title 1',
            'discount_percentage' => '20',
            'banner_image' => 'collection-product-1681237737174.png',
            'description' => 'lorem ipsum'
        ]);
        Collection::create([
            'name' => 'Second',
            'slug' => ' second',
            'title' => 'title 2',
            'discount_percentage' => '20',
            'banner_image' => 'collection-product-1681237737174.png',
            'description' => 'lorem ipsum'
        ]);
        Collection::create([
            'name' => 'Three',
            'slug' => ' three',
            'title' => 'title 3',
            'discount_percentage' => '20',
            'banner_image' => 'collection-product-1681237737174.png',
            'description' => 'lorem ipsum'
        ]);
        Collection::create([
            'name' => 'Four',
            'slug' => ' four',
            'title' => 'title 4',
            'discount_percentage' => '20',
            'banner_image' => 'collection-product-1681237737174.png',
            'description' => 'lorem ipsum'
        ]);
        Collection::create([
            'name' => 'Five',
            'slug' => ' five',
            'title' => 'title 5',
            'discount_percentage' => '20',
            'banner_image' => 'collection-product-1681237737174.png',
            'description' => 'lorem ipsum'
        ]);
    }
}
