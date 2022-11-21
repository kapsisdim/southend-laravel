<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrontPageSeeder extends Seeder
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
                'title' => 'Southend Apparel',
                'main_image' => '/storage/images/home.png',
                'logo_image' => '/storage/images/logo.png',
            ),
        );

        DB::table('front_pages')->insert($data);
    }
}
