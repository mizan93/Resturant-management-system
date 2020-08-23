<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'sub_title' => $faker->sentence,
        'image' => $faker->imageUrl,
    ];
});
