<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductsSeeder extends Seeder
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
                'order_id' => 1,
                'product_size_id' => 4,
                'quantity' => 1,
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
        );

        DB::table('order_products')->insert($data);
    }
}
