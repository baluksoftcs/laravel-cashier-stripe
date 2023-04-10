<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/* Fake data for products table */
$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => ucfirst($faker->words(2, true)),
        'product_price' => $faker->randomFloat(2,0,100),
        'description' => $faker->text(50),
    ];
});
