<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stripe\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reviews::create([
            'product_id' => '1',
            'user_id' => '1',
            'subject' => 'Subject',
            'description' => 'lorem ipsum first description',
            'stars_rating' => '1',
            'status' => '1'
        ]);
        Reviews::create([
            'product_id' => '2',
            'user_id' => '1',
            'subject' => 'Subject',
            'description' => 'lorem ipsum second description',
            'stars_rating' => '2',
            'status' => '1'
        ]);
        Reviews::create([
            'product_id' => '3',
            'user_id' => '1',
            'subject' => 'Subject',
            'description' => 'lorem ipsum third description',
            'stars_rating' => '3',
            'status' => '1'
        ]);
        Reviews::create([
            'product_id' => '4',
            'user_id' => '1',
            'subject' => 'Subject',
            'description' => 'lorem ipsum four description',
            'stars_rating' => '4',
            'status' => '1'
        ]);
        Reviews::create([
            'product_id' => '5',
            'user_id' => '1',
            'subject' => 'Subject',
            'description' => 'lorem ipsum five description',
            'stars_rating' => '5',
            'status' => '1'
        ]);
    }
}
