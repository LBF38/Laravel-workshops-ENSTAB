<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ProductFactory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Product::factory()->count(8)->create(); 
        // Une solution sur stackoverflow ? : https://stackoverflow.com/questions/63816395/laravel-call-to-undefined-function-database-seeders-factory
        ProductFactory::new()->count(8)->create();
    }
}
