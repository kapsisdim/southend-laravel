<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
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
                'title' => 'ABOUT',
                'link' => '/about',
                'main_menu' => 1,
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
            array(
                'title' => 'CONTACT',
                'link' => '/contact',
                'main_menu' => 1,
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
            array(
                'title' => 'TERMS',
                'link' => '/terms',
                'main_menu' => 0,
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
        );

        DB::table('menu_items')->insert($data);
    }
}
