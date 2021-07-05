<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(Product::class . 30)->create();

        // Product::factory()
        //     ->count(30)
        //     ->hasPosts(1)
        //     ->create();
    }
}
