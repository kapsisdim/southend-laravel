<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
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
                'title' => 'Image 1',
                'image' => '/storage/images/products_dummy/1.jpeg',
            ),
            array(
                'title' => 'Image 2',
                'image' => '/storage/images/products_dummy/2.jpeg',
            ),
            array(
                'title' => 'Image 3',
                'image' => '/storage/images/products_dummy/3.jpeg',
            ),
            array(
                'title' => 'Image 4',
                'image' => '/storage/images/products_dummy/4.jpeg',
            ),
            array(
                'title' => 'Image 5',
                'image' => '/storage/images/products_dummy/5.jpeg',
            ),
            array(
                'title' => 'Image 6',
                'image' => '/storage/images/products_dummy/6.jpeg',
            ),
        );

        DB::table('product_images')->insert($data);
    }
}
