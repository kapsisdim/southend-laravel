<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
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
                'title' => 'instagram',
                'icon' => 'fab fa-instagram',
                'link' => 'https://www.instagram.com/southend_apparel/',
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
            ),
        );

        DB::table('socials')->insert($data);
    }
}
