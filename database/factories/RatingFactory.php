<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
            return Product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->word,
        'stars'=>$faker->numberBetween(0,5)

    ];
});
