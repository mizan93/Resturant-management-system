<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
$categories=['category','category-2','categor-3','category-4','category-5'];
$factory->define(Category::class, function (Faker $faker)use($categories) {
    $categoryname=$categories[$faker->numberBetween(0,count($categories)-1)];
    return [
       'name'=> $categoryname,
        'slug' => Str::slug($categoryname),
    ];
});
