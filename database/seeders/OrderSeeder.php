<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
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
                'order_number' => 'order1',
                'comment' => 'Θέλω να τα έχετε όλα στην πένα. Το νου! Peace and Love <3',
                'coupon' => '1312coupon',
                'payment_method' => 'cash',
                'payment_status' => 0,
                'order_status' => 'pending',
                'total' => 54.99,
                'user_id' => 2,
                'shipping_id' => 1,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
        );

        DB::table('orders')->insert($data);
    }
}
