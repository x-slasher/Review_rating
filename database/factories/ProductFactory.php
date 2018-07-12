<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
       'name'=>$faker->name,
        'details'=>$faker->paragraph,
        'price'=>$faker->randomFloat(Null,0,Null),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->randomFloat(Null,0,Null)



    ];
});
