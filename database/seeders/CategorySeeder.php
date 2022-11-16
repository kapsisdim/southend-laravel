<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
                'title' => 'Hoodies',
                'slug' => 'hoodies',
            ),
            array(
                'title' => 'T-Shirts',
                'slug' => 't-shirts',
            ),
        );

        DB::table('categories')->insert($data);
    }
}
