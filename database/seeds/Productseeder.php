<?php

use Illuminate\Database\Seeder;
use App\Product;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* creating a fake data for products table */
        $products = factory(App\Product::class, 9)->create();
    }
}
