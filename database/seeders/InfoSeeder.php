<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
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
                'address' => 'Omirou 3, Argyroupoli',
                'city' => 'Athens 16451',
                'phone' => '6980470294',
                'email' => 'info@southend.gr',
            ),
        );

        DB::table('infos')->insert($data);
    }
}
