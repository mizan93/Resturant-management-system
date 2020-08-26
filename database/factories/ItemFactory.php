<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(2,true),
        'price' => $faker->numberBetween(99,999),
        'image' => $faker->imageUrl,
    ];
});
