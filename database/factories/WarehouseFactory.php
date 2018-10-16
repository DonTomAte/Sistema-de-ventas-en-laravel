<?php

use Faker\Generator as Faker;
use App\Warehouse;
$factory->define(Warehouse::class, function (Faker $faker) {
    return [
        'address'=> $faker->address
    ];
});
