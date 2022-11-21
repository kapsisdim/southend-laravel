<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
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
                'size' => 'xs',
            ),
            array(
                'size' => 's',
            ),
            array(
                'size' => 'm',
            ),
            array(
                'size' => 'l',
            ),
            array(
                'size' => 'xl',
            ),
            array(
                'size' => 'xxl',
            ),
            array(
                'size' => 'one_size',
            ),
        );

        DB::table('product_sizes')->insert($data);
    }
}
