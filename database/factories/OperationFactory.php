<?php

use Faker\Generator as Faker;
use App\Operation;
$factory->define(Operation::class, function (Faker $faker) {
    return [
            'type'=>'pedido',
            'date'=> $faker->date(),
            'user_id'=>'1'
    ];
});
