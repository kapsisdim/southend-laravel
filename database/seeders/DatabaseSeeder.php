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
        $this->call(CouponSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(InfoSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(FrontPageSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductProductSizeSeeder::class);
        $this->call(MenuItemSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ShippingAddressSeeder::class);
        $this->call(BillingAddressSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderProductsSeeder::class);
        $this->call(ContactPageSeeder::class);
    }
}
