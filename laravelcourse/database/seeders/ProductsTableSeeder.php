<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\factories\ProductFactory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class,8)->create(); // A vérifier
        // ProductFactory::new()->count(8)->create();
    }
}
