<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,2000),
        'stock' => $faker->randomDigit,
        'discount'=> $faker->numberBetween(5,30)
        //
    ];
});
