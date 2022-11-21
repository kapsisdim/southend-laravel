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
                'title' => 'SHOP',
                'link' => '/shop',
                'main_menu' => 1,
            ),
            array(
                'title' => 'COLLECTIONS',
                'link' => '/collections',
                'main_menu' => 1,
            ),
            array(
                'title' => 'ABOUT',
                'link' => '/about',
                'main_menu' => 1,
            ),
            array(
                'title' => 'CONTACT',
                'link' => '/contact',
                'main_menu' => 1,
            ),
            array(
                'title' => 'TERMS',
                'link' => '/terms',
                'main_menu' => 0,
            ),
        );

        DB::table('menu_items')->insert($data);
    }
}
