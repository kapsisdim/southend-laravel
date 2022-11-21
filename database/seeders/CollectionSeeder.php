<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
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
                'title' => 'Summer 2022',
                'slug' => 'summer-2022',
            ),
            array(
                'title' => 'Winter 2022',
                'slug' => 'winter-2022',
            ),
        );

        DB::table('collections')->insert($data);
    }
}
