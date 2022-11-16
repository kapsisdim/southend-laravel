<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeeder extends Seeder
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
                'title' => 'In Athens',
                'value' => 5,
            ),
            array(
                'title' => 'Out of Athens',
                'value' => 20,
            ),
        );

        DB::table('shippings')->insert($data);
    }
}
