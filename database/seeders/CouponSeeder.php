<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
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
                'code' => 'coupon1312',
                'value' => 10,
                'type' => 'percentage',
                'status' => 1,
            ),
            array(
                'code' => '1312coupon',
                'value' => 20,
                'type' => 'fixed',
                'status' => 1,
            ),
        );

        DB::table('coupons')->insert($data);
    }
}
