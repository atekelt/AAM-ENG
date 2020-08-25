<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word, 
        'product_number' => $faker->uuid, 
        'count' => $faker->randomNumber,
        'description' => $faker->sentence, 
        'image' => 'images/courses/6.jpg', 
        'price' => $faker->randomFloat,
        'brand_id' => function ()
        {
        	return factory('App\Brand')->create()->id;
        }
    ];
});
