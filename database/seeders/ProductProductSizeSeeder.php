<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductProductSizeSeeder extends Seeder
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
                'product_id' => 1,
                'product_size_id' => 1,
                'amount' => 10,
            ),
            array(
                'product_id' => 1,
                'product_size_id' => 2,
                'amount' => 10,
            ),

            array(
                'product_id' => 2,
                'product_size_id' => 3,
                'amount' => 10,
            ),
            array(
                'product_id' => 2,
                'product_size_id' => 4,
                'amount' => 10,
            ),

            array(
                'product_id' => 3,
                'product_size_id' => 1,
                'amount' => 10,
            ),
            array(
                'product_id' => 3,
                'product_size_id' => 2,
                'amount' => 10,
            ),

            array(
                'product_id' => 4,
                'product_size_id' => 5,
                'amount' => 10,
            ),
            array(
                'product_id' => 4,
                'product_size_id' => 6,
                'amount' => 10,
            ),

            array(
                'product_id' => 5,
                'product_size_id' => 1,
                'amount' => 10,
            ),
            array(
                'product_id' => 5,
                'product_size_id' => 5,
                'amount' => 10,
            ),

            array(
                'product_id' => 6,
                'product_size_id' => 4,
                'amount' => 10,
            ),
            array(
                'product_id' => 6,
                'product_size_id' => 5,
                'amount' => 10,
            ),
        );

        DB::table('products_product_sizes')->insert($data);
    }
}
