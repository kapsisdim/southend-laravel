<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(CouponSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(InfoSeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(FrontPageSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductProductSizeSeeder::class);
    }
}
