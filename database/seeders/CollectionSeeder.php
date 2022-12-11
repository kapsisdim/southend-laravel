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
                'image_id' => 1,
                'slug' => 'summer-2022',
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
            array(
                'title' => 'Winter 2022',
                'image_id' => 2,
                'slug' => 'winter-2022',
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
        );

        DB::table('collections')->insert($data);
    }
}
