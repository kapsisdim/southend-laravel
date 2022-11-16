<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'title' => 'Product 1',
                'list_image_id' => 1,
                'price' => 19.99,
                'slug' => 'product-1',
            ),
            array(
                'title' => 'Product 2',
                'list_image_id' => 2,
                'price' => 29.99,
                'slug' => 'product-2',
            ),
            array(
                'title' => 'Product 3',
                'list_image_id' => 3,
                'price' => 39.99,
                'slug' => 'product-3',
            ),
            array(
                'title' => 'Product 4',
                'list_image_id' => 4,
                'price' => 49.99,
                'slug' => 'product-4',
            ),
            array(
                'title' => 'Product 5',
                'list_image_id' => 5,
                'price' => 59.99,
                'slug' => 'product-5',
            ),
            array(
                'title' => 'Product 6',
                'list_image_id' => 6,
                'price' => 69.99,
                'slug' => 'product-6',
            ),
        );

        DB::table('products')->insert($data);
    }
}
