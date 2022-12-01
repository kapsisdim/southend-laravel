<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Admin User',
                'email' => 'admin@southend.gr',
                'phone' => NULL,
                'password' => Hash::make('password'),
                'is_admin' => 1,
                'email_verified_at' => date('y-m-d h:m:s'),
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
            array(
                'name' => 'Dummy User',
                'email' => 'user@gmail.com',
                'phone' => '6989152210',
                'password' => NULL,
                'is_admin' => 0,
                'email_verified_at' => date('y-m-d h:m:s'),
                'created_at' => date('y-m-d h:m:s'),
                'updated_at' => date('y-m-d h:m:s'),
            ),
        );

        DB::table('users')->insert($data);
    }
}
