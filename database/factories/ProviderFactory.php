<?php

use Faker\Generator as Faker;
use App\Provider;
$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name'=>  $faker->company,
        'phone'=>  $faker->tollFreePhoneNumber,
        'address'=> $faker->address
    ];
});
